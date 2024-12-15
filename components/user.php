<div style="border: solid 1px; margin:20px 0; max-width: 300px; padding:20px;">
    <h1><?= $user['name'];?></h1>
    <p><?= $user['email'];?></p>
    <p><?= $user['mobile'];?></p>
    <p><?= $user['email_verified_at'];?></p>
    <p><?= $user['remember_token'];?></p>
    <a href="/user.php?id=<?= $user['id'];?>">View</a>
</div>