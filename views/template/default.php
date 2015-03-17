<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?PHP echo $this->e($title); ?></title>
    <link rel="stylesheet" href="<?=$this->asset('css\reset.css')?>" />
</head>
<body>
    <?PHP echo $this->section('content'); ?>
</body>
</html>