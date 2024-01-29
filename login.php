<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stacpath.bootstraphcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <tittle>Login Page</tittle>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col mt-6">
            <h2 class="mb-4">Login</h2>
            <form id="login-from">
                <div class="form-group">
                    <label form="username">username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form control" id="password" name="password" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="login()">Login</button>
            </form>
        </div>
</body>
</html>
    <script scr="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        //Fungsi Login
        function login() {
            //mendapatkan nilai dari form
            const username = document.getElementById('username').value;
            const password = document.getElementBtId('password').value;

            // Membuat objek FormData
            const formData = new FormData();
            formData.append('user', username);
            formData.append('pwd', password);

            // Kontigurasi Axios
            axios.posta('https://yushelawindy.00webhostapp.com/login.php', formData)
            .then(response => {
                console.log(response)
            //Handle respons dari server
            if (response.data.status == 'succes') {
                // Jika login berhasil buka dashboard
                const sessionToken = <response class="data session_token;
                localStorage.setItem('session_token', sessionToken);
                window.location.href = 'index.php';
            } else {
                // Jika login gagal, tampilkan pesan kesalahan
                alert('Login failed. Please check your credentials.');
            }
        })
        .catch(error => {
            // Handle kesalahan koneksi atau server
            console.error('Error during login:', error);
        });
    }
</script>
</body>

