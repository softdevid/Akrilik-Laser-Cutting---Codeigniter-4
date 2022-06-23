<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="/ckeditor/ckeditor.js"></script>
</head>

<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ADD BLOG</h2>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <label>Judul</label>
                    <div class="form-group">
                        <input type="text" name="judul" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Kutipan</label>
                    <div class="form-group">
                        <textarea name="kutipan" id="kutipan" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>ISI BLOG</label>
                    <div class="form-group">
                        <textarea name="isi" type="text" id="editor1"></textarea>
                        <script>
                            CKEDITOR.replace('editor1');
                        </script>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Photo</label>
                    <div class="form-group">
                        <input type="file" name="file_upload" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>