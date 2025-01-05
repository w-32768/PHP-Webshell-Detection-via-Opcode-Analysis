<?php
// Configuration et initialisation

define('ROOT_DIR', realpath(__DIR__)); // Définir le répertoire racine du projet
$current_dir = ROOT_DIR; // Initialisation du répertoire actuel

// Fonction de validation du répertoire
function validateDirectory($dir) {
    $realpath = realpath($dir);
    if ($realpath && strpos($realpath, ROOT_DIR) === 0) { // Vérifier si le chemin est sous le répertoire racine
        return $realpath;
    }
    return ROOT_DIR;
}

// Gérer le répertoire courant à partir des paramètres GET
if (isset($_GET['dir'])) {
    $current_dir = validateDirectory($_GET['dir']);
}

// Vérifier si le répertoire existe
if (!is_dir($current_dir)) {
    $current_dir = ROOT_DIR; // Retourner au répertoire racine si le répertoire demandé est invalide
}

// Liste les fichiers et dossiers d'un répertoire
function listDirectory($dir)
{
    $files = scandir($dir);
    $directories = [];
    $regular_files = [];

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $file_path = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_dir($file_path)) {
                $directories[] = $file;
            } else {
                $regular_files[] = $file;
            }
        }
    }

    // Affichage des dossiers
    foreach ($directories as $directory) {
        echo '<tr>';
        echo '<td><a href="?dir=' . urlencode($dir . DIRECTORY_SEPARATOR . $directory) . '">📁 ' . htmlspecialchars($directory) . '</a></td>';
        echo '<td>Folder</td>';
        echo '<td>' . getFileActions($dir, $directory) . '</td>';
        echo '</tr>';
    }

    // Affichage des fichiers
    foreach ($regular_files as $file) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($file) . '</td>';
        echo '<td>' . formatFileSize($dir . DIRECTORY_SEPARATOR . $file) . '</td>';
        echo '<td>' . getFileActions($dir, $file) . '</td>';
        echo '</tr>';
    }
}

// Formatage de la taille des fichiers
function formatFileSize($file)
{
    if (is_file($file)) {
        $size = filesize($file);
        if ($size >= 1048576) {
            return round($size / 1048576, 2) . ' MB';
        } elseif ($size >= 1024) {
            return round($size / 1024, 2) . ' KB';
        }
        return $size . ' bytes';
    }
    return 'N/A';
}

// Générer les actions pour chaque fichier ou dossier
function getFileActions($dir, $file)
{
    $url_dir = urlencode($dir);
    $file_url = urlencode($file);

    $actions = '<a href="?dir=' . $url_dir . '&edit=' . $file_url . '">Edit</a> | ';
    $actions .= '<a href="?dir=' . $url_dir . '&delete=' . $file_url . '">Delete</a> | ';
    $actions .= '<a href="?dir=' . $url_dir . '&rename=' . $file_url . '">Rename</a> | ';
    $actions .= '<a href="?dir=' . $url_dir . '&download=' . $file_url . '">Download</a>';
    return $actions;
}

// Actions de gestion des fichiers

// Supprimer un fichier
if (isset($_GET['delete'])) {
    $file_to_delete = $current_dir . DIRECTORY_SEPARATOR . basename($_GET['delete']);
    if (is_file($file_to_delete)) {
        unlink($file_to_delete);
    }
    header("Location: ?dir=" . urlencode($current_dir));
    exit;
}

// Télécharger un fichier
if (isset($_GET['download'])) {
    $file_to_download = $current_dir . DIRECTORY_SEPARATOR . basename($_GET['download']);
    if (is_file($file_to_download)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_to_download) . '"');
        header('Content-Length: ' . filesize($file_to_download));
        readfile($file_to_download);
        exit;
    }
}

// Renommer un fichier
if (isset($_POST['rename_file'])) {
    $old_name = $current_dir . DIRECTORY_SEPARATOR . basename($_POST['old_name']);
    $new_name = $current_dir . DIRECTORY_SEPARATOR . basename($_POST['new_name']);
    if (is_file($old_name)) {
        rename($old_name, $new_name);
    }
    header("Location: ?dir=" . urlencode($current_dir));
    exit;
}

// Télécharger un fichier
if (isset($_POST['upload'])) {
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $target_file = $current_dir . DIRECTORY_SEPARATOR . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    }
    header("Location: ?dir=" . urlencode($current_dir));
    exit;
}

// Modifier un fichier
if (isset($_POST['save_file'])) {
    $file_to_edit = $current_dir . DIRECTORY_SEPARATOR . basename($_POST['file_name']);
    if (is_file($file_to_edit)) {
        file_put_contents($file_to_edit, $_POST['file_content']);
    }
    header("Location: ?dir=" . urlencode($current_dir));
    exit;
}

// Créer un fichier vide
if (isset($_POST['create_file'])) {
    $new_file_name = basename($_POST['new_file_name']);
    $new_file_path = $current_dir . DIRECTORY_SEPARATOR . $new_file_name;
    file_put_contents($new_file_path, "");
    header("Location: ?dir=" . urlencode($current_dir));
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager - Professionnel</title>
    <style>
        /* Style amélioré avec thème sombre */
        body {
            background-color: #121212;
            color: #E0E0E0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #BB86FC;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #BB86FC;
        }
        tr:nth-child(even) {
            background-color: #222;
        }
        tr:nth-child(odd) {
            background-color: #121212;
        }
        a {
            color: #03DAC6;
            text-decoration: none;
        }
        a:hover {
            color: #BB86FC;
        }
        button {
            background-color: #03DAC6;
            color: #121212;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #BB86FC;
        }
        input[type="file"], input[type="text"] {
            color: #E0E0E0;
            background-color: #222;
            border: 1px solid #BB86FC;
            padding: 10px;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>File Manager</h1>

    <p>Répertoire actuel: <a href="?dir=<?php echo urlencode(dirname($current_dir)); ?>" style="color: #03DAC6;"><?php echo htmlspecialchars($current_dir); ?></a></p>

    <div class="form-container">
        <!-- Formulaire pour télécharger un fichier -->
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit" name="upload">Télécharger</button>
        </form>

        <!-- Formulaire pour créer un fichier -->
        <form method="post">
            <input type="text" name="new_file_name" placeholder="Nom du fichier" required>
            <button type="submit" name="create_file">Créer un fichier</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom du fichier</th>
                <th>Taille</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php listDirectory($current_dir); ?>
        </tbody>
    </table>

    <!-- Formulaire de renommage -->
    <?php if (isset($_GET['rename'])): ?>
    <form method="post">
        <input type="hidden" name="old_name" value="<?php echo htmlspecialchars($_GET['rename']); ?>">
        <input type="text" name="new_name" placeholder="Nouveau nom" required>
        <button type="submit" name="rename_file">Renommer</button>
    </form>
    <?php endif; ?>

    <!-- Formulaire de modification -->
    <?php if (isset($_GET['edit'])): ?>
    <form method="post">
        <input type="hidden" name="file_name" value="<?php echo htmlspecialchars($_GET['edit']); ?>">
        <textarea name="file_content" required><?php echo htmlspecialchars(file_get_contents($current_dir . DIRECTORY_SEPARATOR . $_GET['edit'])); ?></textarea>
        <br>
        <button type="submit" name="save_file">Sauvegarder les modifications</button>
    </form>
    <?php endif; ?>

</body>
</html>
