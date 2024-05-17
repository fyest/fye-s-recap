

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Menambah Data Lagu</title>

    <style>
        h1 {
            text-align :center;
        }
        select {
            width : 100%;
            
        }
        input[type=text] {
            width : 100%;
            border : 1px solid;
            padding : 5px;
            
        }
        .content {
            position : center;
            padding : 20px;
            
        }
        div {
            margin : 10px;
        }

    </style>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h1>Tambah Lagu Favorite</h1>
    <div class="content">
    <form action="data.php" method="post">
        <div>
            <label>Genre</label>
            <select name="genre">
                <option value="Hip-Hop">Hip-Hop</option>
                <option value="POP">Pop</option>
                <option value="R&B">R & B</option>
            </select>
        </div>
        <div>
            <label>Judul Lagu</label>
            <input type="text" name="judul">
        </div>        
        <div>
            <label>Artist</label>
            <input type="text" name="artist">
        </div>        
        <div>
            <label>Album</label>
            <input type="text" name="album">
        </div>        
        <div>
            <label>Tahun Rilis</label>
            <input type="date" name="tahun_rilis">
        </div> 
        <div>
            <label>Durasi Lagu</label>
            <input type="time" name="durasi_lagu">
        </div> 
        <div style="margin-top: 20px;">
            <input type="submit" value="Simpan">
        </div>
    </form>
    </div>             
        

</body>
</html>