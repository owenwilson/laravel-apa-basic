<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" style="line-height: 2.5;">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="text-center">
                <p class="text-uppercase">
                    <strong>
                    {{ $title}}
                    </strong>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto" style="max-width: 600px; min-height: 600px;">
            
        </div>
    </div>
    <div class="row">    
        <div class="text-center">
            <p>{{ $author }}</p>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            <p>{{ $date_document }}</p>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            <p class="text-uppercase">
                {{ $institution }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto" style="max-width: 110px; min-height: 110px;">
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            {{-- <p>{{ $footer }}</p> --}}
        </div>
    </div>
    <div class="row">
        <div class="mx-auto" style="max-width: 50px; min-height:50px;">
        </div>
    </div>
    </div>

    {{-- INDICE --}}
    <div class="row">
        <p>INDICE DE TABLA</p>
        <ol>
            <?php
            $test = explode(",", $table_index);
            foreach ($test as $key => $value) {
                echo '<li class="text-uppercase">',$value,'</li>';
            }?>
        </ol>
    </div>
    <div class="row pt-5" >
        <?php
        $sizeBlock = explode(",", $table_index);
        if(count($sizeBlock) == 1 || count($sizeBlock) == 2 || count($sizeBlock) == 3 || count($sizeBlock) == 4){
            echo '<div class="mx-auto" style="max-width: 950px; min-height: 950px;"></div>';
        }else if(count($sizeBlock) == 5 || count($sizeBlock) == 6 || count($sizeBlock) == 7 || count($sizeBlock) == 8 || count($sizeBlock) == 9){
            echo '<div class="mx-auto" style="max-width: 850px; min-height: 850px;"></div>';
        }else{
            echo '<div class="mx-auto" style="max-width: 700px; min-height: 700px;"></div>';
        };
        ?>
    </div>

    {{-- RESUMEN --}}
    <div class="row">
        <div class="text-center">
            <p class="text-uppercase"><strong>RESUMEN</strong></p>
        </div>
    </div>
    <div class="row ms-5 me-5">
        {{-- <div class="d-flex justify-content-center"> --}}
            <p style="line-height: 2.7;">{{ $content }}</p>
        {{-- </div> --}}
    </div>
    <br>
    {{-- BIBLIOGRAFIAS --}}
    <div class="row">
        <p class="text-uppercase"><strong>Bibliografias</strong></p>
        <p style="line-height: 2.7;">{{ $bibliography }}</p>
    </div>
</body>
</html>
