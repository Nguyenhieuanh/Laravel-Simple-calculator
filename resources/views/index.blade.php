<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-5 bg-light border p-3 mt-5 mx-auto">
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control" style="text-align: right" value="<?php if (isset($result)) {
                            echo $result;
                        } ?>" id="result" name="result">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2"><input type="button" value="7" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="8" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="9" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="/" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="CE" onclick="clear_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-2"><input type="button" value="4" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="5" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="6" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="*" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="C" onclick="clear_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-2"><input type="button" value="1" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="2" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="3" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="-" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="%" class="btn btn-outline-primary btn-block"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-4"><input type="button" value="0" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="." onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="button" value="+" onclick="clk_btn(this.value)"
                            class="btn btn-outline-primary btn-block"></div>
                    <div class="col-2"><input type="submit" value="=" class="btn btn-outline-primary btn-block"></div>
                </div>
            </form>
        </div>
    </div>


    <script src="{{ asset('js/myJs.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>