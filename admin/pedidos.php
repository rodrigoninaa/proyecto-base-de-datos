<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Usuarios</h1>
        <div class="add-user-form">
            <h2>Agregar Usuario</h2>
            <form action="" method="post">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="submit">Agregar Usuario</button>
            </form>
        </div>

        <div class="user-list">
            <h2>Lista de Usuarios</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre de usuario</th>
                    <th>Acciones</th>
                </tr>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                    require_once "../config/conexion.php";

                    $username = $_POST["username"];
                    $password = md5($_POST["password"]);

                    $sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$username', '$password')";
                    mysqli_query($conexion, $sql);
                    mysqli_close($conexion);

                    header("Location: usuarios.php");
                    exit();
                }

                require_once "../config/conexion.php";

                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conexion, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['usuario']}</td>";
                    echo "<td><button onclick=\"deleteUser({$row['id']})\">Eliminar</button></td>";
                    echo "</tr>";
                }

                mysqli_close($conexion);
                ?>
            </table>
        </div>
    </div>

    <script>
        function deleteUser(userId) {
            if (confirm("¿Estás seguro de eliminar este usuario?")) {
                const form = document.createElement("form");
                form.method = "post";
                form.action = "delete_user.php";

                const input = document.createElement("input");
                input.type = "hidden";
                input.name = "user_id";
                input.value = userId;

                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
</body>

</html>
