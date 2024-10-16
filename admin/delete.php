<?php
include '../db/dbconn.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan ID item yang akan dihapus telah dikirim melalui input tersembunyi
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Query delete
        $sql = "DELETE FROM items WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Item berhasil dihapus";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "ID item tidak diberikan";
    }
}

// Tutup koneksi
$conn->close();
?>

<table>
    <form method="post" action="delete.php">
        <tr>
            <td>
                <?php
                // Dapatkan ID dari parameter query atau sesi, dari mana pun asalnya
                // Contoh: $id = $_GET['id']; // pastikan untuk membersihkan dan memvalidasi input pengguna
                $id = isset($_POST['id']) ? $_POST['id'] : null;


                ?>
                <input type="hidden" name="id" autocomplete="off" class="input-large number" id="text" value="<?php echo $id; ?>" required />
            </td>
        </tr>
        <tr>
            <td>
                <button name="delete" type="submit" class="btn btn-block btn-large btn-danger">
                    <i class="icon-trash icon-white"></i> Hapus Data
                </button>
            </td>
        </tr>
    </form>
</table>