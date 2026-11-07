<?php
$tours = [
 ["id"=>1,"title"=>"رحلة بورتسودان - البحر الأحمر","price"=>"250,000 جنيه","days"=>"5 أيام","img"=>"https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800"],
 ["id"=>2,"title"=>"رحلة جبل مرة - دارفور","price"=>"180,000 جنيه","days"=>"4 أيام","img"=>"https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800"],
 ["id"=>3,"title"=>"رحلة كسلا - توتيل","price"=>"150,000 جنيه","days"=>"3 أيام","img"=>"https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800"],
];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Terminal Tour - تيرمينال تور</title>
<style>
body{font-family:Arial;background:#f5f5f5;margin:0;padding:0}
header{background:#6a1b9a;color:#fff;padding:25px;text-align:center}
h1{margin:0} .wrap{padding:15px;display:grid;gap:15px}
.card{background:#fff;border-radius:15px;overflow:hidden;box-shadow:0 2px 10px #0002}
.card img{width:100%;height:180px;object-fit:cover}
.card div{padding:15px} .price{color:#6a1b9a;font-weight:bold;font-size:18px}
.btn{display:block;background:#6a1b9a;color:#fff;text-align:center;padding:12px;border-radius:10px;text-decoration:none;margin-top:10px}
</style></head>
<body>
<header><h1>✈️ Terminal Tour</h1><p>اكتشف السودان معانا</p></header>
<div class="wrap">
<?php foreach($tours as $t){ ?>
<div class="card"><img src="<?=$t['img']?>">
<div><h3><?=$t['title']?></h3><p>⏰ <?=$t['days']?></p><p class="price"><?=$t['price']?></p>
<a class="btn" href="https://wa.me/249999999999?text=عايز احجز <?=$t['title']?>">احجز عبر واتساب</a></div></div>
<?php } ?>
</div></body></html>