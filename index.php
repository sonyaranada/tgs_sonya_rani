<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Kelas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">Form Biodata Kelas</div>
        <div class="content">
            <form action="user-details">
                <div class="input-inbox">
                    <div class="details">Nama</div>
                    <input type="text" placeholder="masukan nama"required>
                </div>
                <div class="input-inbox">
                    <div class="details">Kelas</div>
                    <select>
                        <option>11 RPL 1</option>
                        <option>11 RPL 2</option>
                    </select>
                </div>
                <div class="input-inbox">
                    <div class="details">Alamat</div>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                     <input type="radio" name="gender" id="dot-2">
                     <span class="gender-title">Jenis Kelamin</span>
                     <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                             <span class="gender">Pria</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                             <span class="gender">Wanita</span>
                        </label>
                     </div>
                </div>
                <!-- <div class="button">
                    <input type="submit" value="Kirim">
                </div> -->
            </form>
        </div>
    </div>
</body>
</html>