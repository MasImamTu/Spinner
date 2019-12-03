<?php
if(isset($_POST['artikel'])) {
    $edit = str_replace(array(" aku "," saya "," gue "," ane "," gw "," jaka "," admin "," penulis ")," penulis ",$_POST['artikel']);
    $edit = str_replace(array(" game "," games ")," gim ",$edit);
    $edit = str_replace(array(" mudah ")," gampang ",$edit);
    $edit = str_replace(array(" tulisan ")," artikel ",$edit);
    $edit = str_replace(array(" dapat ")," bisa ",$edit);
    $edit = str_replace(array(" siapapun ")," siapa saja ",$edit);
    $edit = str_replace(array(" menerapkan "," memakai "," mengaplikasikan ")," menggunakan ",$edit);
    $edit = str_replace(array(" sangat "," amat "," benar-benar "," benar benar "," benar - benar "," sungguh sungguh "," sungguh-sungguh "," sungguh - sungguh ")," sangat ",$edit);
    $edit = str_replace(array(" Banget ")," sekali ",$edit);
    $edit = str_replace(array(" bakal ")," akan ",$edit);
    $edit = str_replace(array(" serta ")," dan ",$edit);
    $edit = str_replace(array(" tak ")," tidak ",$edit);
    $edit = str_replace(array(" yg ")," yang ",$edit);
    $edit = str_replace(array(" bagi ")," untuk ",$edit);
    $edit = str_replace(array(" trend "," trending ")," tren ",$edit);
    $edit = str_replace(array("."),". ",$edit);
    $edit = str_replace(array(".  "),". ",$edit);
    $edit = str_replace(array(","),", ",$edit);
    $edit = str_replace(array(",  "),", ",$edit);
    $edit = str_replace(array(" siapapun ")," siapa saja ",$edit);
    $edit = str_replace(array(" familiar ")," tidak asing ",$edit);
    $edit = str_replace(array(" gim online ")," game online ",$edit);
    $edit = str_replace(array(" anda "," elo "," elu "," ente ")," kamu ",$edit);
    $edit = str_replace(array(" memainkan ")," bermain ",$edit);
    $edit = str_replace(array(" menata ")," mengatur ",$edit);
    $edit = str_replace(array("  ")," ",$edit);
    $edit = preg_replace("/\([^)]+\)/","",$edit);
    $edit = str_replace(array(" ketemu ")," bertemu ",$edit);
    $edit = str_replace(array("/")," / ",$edit);
    $edit = str_replace(array(" sobat "," sahabat "," teman baik")," sohib ",$edit);
    $replaceThis = Array( 
        'tutorial' => 'cara', 
        'lengkap' => 'tuntas', 
        'bagaimana' => 'mengenai', 
        'cara' => 'langkah', 
        'agar' => 'supaya', 
        'sobat' => 'anda', 
        'lebih' => 'bisa', 
        'supaya' => 'agar', 
        'oleh' => 'dengan', 
        'jika' => 'kalau', 
        'blog' => 'web', 
        'web' => 'blog', 
        'otomatis' => 'secara sendirinya', 
        'pasti' => 'mau', 
        'diberi' => 'diberikan', 
        'ranking' => 'peringkat', 
        'udah' => 'sudah', 
        'Jika' => 'kalau', 
        'akan' => 'pasti', 
        'maka' => 'sepatutnya', 
        'pengunjung' => 'visitor', 
        'meningkat' => 'bertambah', 
        'visitor' => 'pengunjung', 
        'nggak' => 'tidak', 
        'tidak' => 'nggak', 
        'bisa' => 'dapat', 
        'kepengen' => 'ingin', 
        'kepengin' => 'ingin', 
        'ingin' => 'mau', 
        'apalagi' => 'terlebih lagi', 
        'bagi' => 'kepada', 
        'sedang' => 'saatini', 
        'langsung' => 'segera', 
        'postingan' => 'artikel', 
        'ini' => 'berikut', 
        'beberapa' => 'sekelumit', );
    $edit = str_replace(array_keys($replaceThis), $replaceThis,$edit);
    $respon = '<br/><br/><textarea style="resize: none;" name="artikel" alt="Artikel" placeholder="Masukan artikelnya disini" rows="15" cols="100">'.$edit.'</textarea>';
}
?>
<head>
    <title>Article Spinner V1.1</title>
</head>
<body>
    <center>
        <h1>Article Spinner V1.1</h1>
        <h4>By 48Faraaz5898</h4>
        <br/>
        <form method="post" action="">
            <textarea style="resize: none;" name="artikel" alt="Artikel" placeholder="Masukan artikelnya disini" rows="15" cols="100" required="required" autofocus></textarea><br/><br/>
            <input type="submit" value="submit"/>
        </form>
        <?php echo @$respon; ?>
    </center>
</body>