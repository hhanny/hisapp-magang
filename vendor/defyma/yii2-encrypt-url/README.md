# yii2-encrypt-url


install:
```
composer require defyma/yii2-encrypt-url:"dev-master"
```

config/web.php
```
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'defyma\helpers\EncryptUrl',
            'pattern' => '',
            'route' => 'site/index',
            'skey' => '<change to your key>'
        ],
    ],
],
```
### PHP Method rever to file EncryptUrl.php
### JS Method:
1. urlEncode(string_url)
2. urlEncodeObj(string_url, object_param)
3. urlDecode(string_url_encoded)

contoh php:
```
\yii\helper\Url::to(['create', 'id' => 123]); //http://.../create?ODA3Ly8_OTUxMzE3Mjc4P2JkYTg3MTNkZTZmZjRiNjE_NTQ5OTI1MzA3MT82ZTg3NjllNTNiNTQ1ODkzNTZmYWFjYTRmODRlODQxMz83NDU5OTUyMjMxPz09UXdsd3FaVjdmT0hLblZiRnVRTHFaSj81MzAzMzIyNTQxPyEhXTk1MTMxNzI3OCw1NDk5MjUzMDcxLDc0NTk5NTIyMzEsNTMwMzMyMjU0MVs
```

contoh js:
```
<script>


//versi 1
var url_v1 = urlEncode('http://contoh.com/create?id=123');
console.log(url_v1); //http://.../create?ODA3Ly8_OTUxMzE3Mjc4P2JkYTg3MTNkZTZmZjRiNjE_NTQ5OTI1MzA3MT82ZTg3NjllNTNiNTQ1ODkzNTZmYWFjYTRmODRlODQxMz83NDU5OTUyMjMxPz09UXdsd3FaVjdmT0hLblZiRnVRTHFaSj81MzAzMzIyNTQxPyEhXTk1MTMxNzI3OCw1NDk5MjUzMDcxLDc0NTk5NTIyMzEsNTMwMzMyMjU0MVs

//versi 2
var url_v2 = urlEncodeObj('http://contoh.com/create', {'id':'123'});
console.log(url_v2); //http://.../create?ODA3Ly8_OTUxMzE3Mjc4P2JkYTg3MTNkZTZmZjRiNjE_NTQ5OTI1MzA3MT82ZTg3NjllNTNiNTQ1ODkzNTZmYWFjYTRmODRlODQxMz83NDU5OTUyMjMxPz09UXdsd3FaVjdmT0hLblZiRnVRTHFaSj81MzAzMzIyNTQxPyEhXTk1MTMxNzI3OCw1NDk5MjUzMDcxLDc0NTk5NTIyMzEsNTMwMzMyMjU0MVs


</script>
```

contoh decode:

```

<?php
    $var = \yii\helpers\Url::to(['create', 'id' => 21120001, 'nama' => 'Defy Muhammad Aminudin']);
    print_r($var);
?>

<script>

    $(document).ready(function () {
        var __ = `<?=$var?>`;
        var decoded1 = urlDecode(__);

        console.log('URL FROM PHP', __); //http://..../create?id=21120001&nama=Defy Muhammad Aminudin
        console.log('decoded URL FROM PHP', decoded1);

        var url = 'http://contoh.com/create?id=123&data=321';
        var url_v1 = urlEncode(url);
        console.log('URL', url); //http://contoh.com/create?id=123&data=321
        console.log('ENCODED URL', url_v1); //http://.../create?ODA3Ly8_OTUxMzE3Mjc4P2JkYTg3MTNkZTZmZjRiNjE_NTQ5OTI1MzA3MT82ZTg3NjllNTNiNTQ1ODkzNTZmYWFjYTRmODRlODQxMz83NDU5OTUyMjMxPz09UXdsd3FaVjdmT0hLblZiRnVRTHFaSj81MzAzMzIyNTQxPyEhXTk1MTMxNzI3OCw1NDk5MjUzMDcxLDc0NTk5NTIyMzEsNTMwMzMyMjU0MVs

        var decoded2 = urlDecode(url_v1);
        console.log('decoded URL', decoded2); //http://contoh.com/create?id=123&data=321
    });

</script>
```


     
