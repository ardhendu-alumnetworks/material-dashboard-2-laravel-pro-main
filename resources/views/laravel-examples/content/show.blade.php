<!DOCTYPE html>
<html>
<head>
    <title>Show Page</title>
    <style>
        {!! html_entity_decode(json_decode($pageData)->{'gjs-css'}) !!}
    </style>
</head>
<body>
    <div>
        {!! html_entity_decode(json_decode($pageData)->{'gjs-html'}) !!}
    </div>
</body>
</html>
