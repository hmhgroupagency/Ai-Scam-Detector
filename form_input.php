<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laporan Penipuan</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .container_input {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        .form-container_input {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #111;
        }

        p.description {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
            padding-top: 10px;
            font-size: 15px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 0px;
            border-radius: 4px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff0009'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E") no-repeat right 10px center;
            background-size: 16px;
            padding-right: 35px;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        .two-column-group {
            display: flex;
            gap: 10px;
        }

        .two-column-group input,
        .two-column-group select {
            flex: 1;
            padding: 10px;
            border-radius: 4px;
        }

        .upload-container_input {
            display: flex;
            justify-content: center;
            padding-bottom: 10px;
        }

        .upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            width: 70%;
            padding: 10px;
            background-color: #ffffff;
            color: #757575;
            font-weight: bold;
            border: 0px;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        .upload-container_input input[type="file"] {
            display: none;
        }

        button[type="submit"] {
            padding: 10px;
            background-color: #ff0009;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        button[type="submit"]:hover {
            background-color: #cc0007;
        }

        .judul_laporan {
            color: #000000;
            text-align: center;
            font-weight: 600;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .two-column-group {
                flex-direction: column;
            }

            .upload-label {
                width: 100%;
            }

            p.description {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container_input">
        <div class="judul_laporan">
            <h2>Laporkan <span style="color: #ff0009;"> Penipuan</span> yang Anda Temukan!</h2>
        </div>
        <p class="description">Laporkan segala penipuan / modus yang mengarah terhadap penipuan di website ini agar pembaca lain bisa menghindarinya!</p>
        <div class="form-container_input">
            <form action="simpan_laporan.php" method="POST" enctype="multipart/form-data">
                <div class="two-column-group">
                    <input type="text" name="first_name" placeholder="Nama depan..." required>
                    <input type="text" name="last_name" placeholder="Nama belakang..." required>
                </div>
                <div class="two-column-group">
                    <select name="category" required>
                        <option value="" disabled selected>Kategori Penipuan</option>
                        <option value="Phishing">Phishing</option>
                        <option value="Scam Investment">Scam Investment</option>
                        <option value="Identity Theft">Identity Theft</option>
                    </select>
                    <input type="text" name="scam_link" placeholder="Link URL Penipuan...">
                </div>
                <textarea name="notes" placeholder="Berikan catatan pengalaman anda disini, khususnya cara pelaku mengelabui calon korban..."></textarea>
                <div class="upload-container_input">
                    <label class="upload-label" for="image-upload">
                        <i class="fas fa-upload" style="color: #ff0009;"></i> Upload Gambar
                    </label>
                    <input type="file" name="image" id="image-upload" accept="image/*" required>
                </div>
                <button type="submit">Kirim<i class="fas fa-paper-plane" style="padding-left: 7px;"></i></button>
            </form>
        </div>
    </div>
</body>
</html>
