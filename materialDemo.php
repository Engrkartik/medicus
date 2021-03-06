<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medi-Cus India</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- pretty-photo -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- slick carousel -->
    <link href="css/slick.css" rel="stylesheet">

    <!-- animate -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- animate -->
    <link href="css/datepicker.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1 class="header">Input
    <small><a href="http://www.google.com/design/spec/components/text-fields.html">specification</a></small>
</h1>

<div class="inputs">
    <h2>Input label styles
        <small>default sizing</small>
    </h2>

    <div class="form-group label-static">
        <label for="i2" class="control-label">label-static</label>
        <input type="email" class="form-control" id="i2" placeholder="placeholder attribute">

        <p class="help-block">This is a hint as a <code>p.help-block.hint</code></p>
    </div>

    <div class="form-group label-floating">
        <label for="i5" class="control-label">label-floating</label>
        <input type="email" class="form-control" id="i5">
        <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
    </div>

    <div class="form-group label-placeholder">
        <label for="i5p" class="control-label">label-placeholder</label>
        <input type="email" class="form-control" id="i5p">
        <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
    </div>

    <form>
        <div class="form-group">
            <label for="i5ps" class="control-label col-sm-2">Column label</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" id="i5ps" placeholder="placeholder attribute">
                <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
            </div>
        </div>
    </form>
    <br>
    <br>

    <h2>Input - floating labels
        <small>form-group sizing</small>
    </h2>
    <div class="form-group form-group-sm label-floating">
        <label for="i4" class="control-label">Email address form-group-sm</label>
        <input type="email" class="form-control" id="i4">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group label-floating">
        <label for="i5i" class="control-label">Email address default size</label>
        <input type="email" class="form-control" id="i5i">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group form-group-lg label-floating">
        <label for="i6" class="control-label">Email address form-group-lg</label>
        <input type="email" class="form-control" id="i6">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <h2>Input - static labels
        <small>form-group sizing</small>
    </h2>

    <div class="form-group form-group-sm label-static">
        <label for="si4" class="control-label">Email address form-group-sm</label>
        <input type="email" class="form-control" id="si4" placeholder="Placeholder">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group label-static">
        <label for="si5i" class="control-label">Email address default size</label>
        <input type="email" class="form-control" id="si5i" placeholder="Placeholder">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group form-group-lg label-static">
        <label for="si6" class="control-label">Email address form-group-lg</label>
        <input type="email" class="form-control" id="si6" placeholder="Placeholder">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <h2>Input - no labels
        <small>form-group sizing</small>
    </h2>

    <div class="form-group form-group-sm">
        <label for="si4n" class="control-label">Email address form-group-sm</label>
        <input type="email" class="form-control" id="si4n" placeholder="Placeholder">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group">
        <label for="si5in" class="control-label">Email address default size</label>
        <input type="email" class="form-control" id="si5in" placeholder="Placeholder">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group form-group-lg">
        <label for="si6n" class="control-label">Email address form-group-lg</label>
        <input type="email" class="form-control" id="si6n" placeholder="Placeholder">
        <span class="help-block">Please enter a valid email address</span>
    </div>


    <h2>Input -
        <small>floating label feedback variants</small>
    </h2>
    <div class="form-group has-success label-floating">
        <label for="f1" class="control-label">Email address has-success</label>
        <input type="email" class="form-control" id="f1">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group has-warning label-floating">
        <label for="f2" class="control-label">Email address has-warning</label>
        <input type="email" class="form-control" id="f2">
        <span class="help-block">Please enter a valid email address</span>
    </div>

    <div class="form-group has-error label-floating">
        <label for="f3" class="control-label">Email address has-error</label>
        <input type="email" class="form-control" id="f3">
        <span class="help-block">Please enter a valid email address</span>
    </div>


    <h2>Input - Legacy</h2>
    <!-- Exercise backwards compatibility without form-group -->
    <input type="text" class="form-control floating-label" placeholder="Legacy floating label as placeholder attribute" data-hint="This is a hint using a legacy <code>data-hint</code> attribute on the input">

    <h2>Textarea</h2>

    <div class="form-group label-floating">
        <label for="t1" class="control-label">Floating label</label>
        <textarea id="t1" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="placeholder without label"></textarea>
    </div>

    <!-- legacy markup -->
    <textarea class="form-control floating-label" placeholder="legacy floating label as placeholder"></textarea>

    <h2>Validation</h2>

    <div class="form-group label-floating">
        <label for="111" class="control-label">email</label>
        <input type="email" class="form-control" id="111">
    </div>
    <div class="form-group label-floating">
        <label for="222" class="control-label">number</label>
        <input type="number" class="form-control" id="222">
    </div>

    <h2>Disabled</h2>

    <div class="form-group label-floating">
        <label for="333" class="control-label">email</label>
        <input disabled="" type="text" class="form-control" id="333">
    </div>
    <div class="form-group label-floating">
        <label for="444" class="control-label">number</label>
        <input disabled="" type="text" class="form-control" id="444">
    </div>

    <h2>Hints</h2>

    <div class="form-group label-floating">
        <label for="555" class="control-label">label</label>
        <input type="text" class="form-control" id="555">

        <p class="help-block">Some helpful hint</p>
    </div>
    <div class="form-group label-floating">
        <label for="676" class="control-label">label</label>
        <input type="email" class="form-control" id="676">

        <p class="help-block">A valid email contains an @ character</p>
    </div>


    <h2>Styling</h2>

    <div class="form-group has-success">
        <input type="text" class="form-control" placeholder="placeholder">
    </div>
    <div class="form-group has-success label-floating">
        <label for="777" class="control-label">floating label</label>
        <input type="text" class="form-control" id="777">
    </div>
</div>
</body>
</html>