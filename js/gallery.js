$(document).ready(function() {
    var num_rows = $('#num_rows').val();

    get_images(0, num_rows);

    $(function() {
        var files = $('#files');

        $('#file_upload').fileupload({
            url: '../insert/image_ins.php',
            dropZone: '#drop_zone',
            dataType: 'json',
            autoUpload: false
        }).on('fileuploadadd', function(e, data) {
            var file_type_allowed = /.\.(gif|jpg|png|jpeg)$/i;
            var file_name = data.originalFiles[0]['name'];
            var file_size = data.originalFiles[0]['size'];

            if(!file_type_allowed.test(file_name)) {
                $('#error').html('Only Images are allowed!');
            } else if (file_size > 5000000) {
                $('#error').html('Your file is too big! The Max allowed size is: 5MB')
            } else {
                $('#error').html('');
                data.submit();
            }
        }).on('fileuploaddone', function(e, data) {
            console.log(data);
            var status = data.jqXHR.responseJSON.status;
            var message = data.jqXHR.responseJSON.message;

            if(status === 1) {
                var path = data.jqXHR.responseJSON.Path;

                add_imgs(path, 0);
            } else {
                $('#error').html(message);
            }

        }).on('fileuploadprogressall', function(e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress').html('Completed - ' + progress + '%');
        });
    });

    function get_images(start, max) {
        if(start > max) {
            return;
        }

        $.ajax({
            url: '../insert/image_ins.php',
            method: 'POST',
            dataType: 'json',
            data: {
                get_images: 1,
                start: start
            },
            success: function(response) {
                for(var i = 0; i < response.images.length; i++) {
                    add_imgs("../img/uploads/" + response.images[i].path, response.images[i].image_id);
                    /*add_admin_imgs("../img/uploads/" + response.images[i].path, response.images[i].image_id);*/
                }

                get_images((start + 8), max);
            }
        });
    }

    function add_imgs(path) {
        $('#gallery').find('.no-padding').find('.gallery:last').append('<a href="'+path+'" target="_blank"><img class="" src="'+path+'" alt="uploaded image"></a>');

        var image_count = $('#gallery').find('.no-padding').find('.gallery:last').children().length;

        if(image_count === 3) {
            $('#gallery').find('.no-padding').append('<div class="gallery"></div>');
        }
    }
})

function del_image(image_id) {
    if(image_id === 0) {
        alert('You are not able to delete this image now!');
    } else if(confirm('Are you sure that you want to delete this image?')) {
        $.ajax({
            url: '../insert/image_ins.php',
            method: 'POST',
            dataType: 'text',
            data: {
                del_image: 1,
                image_id: image_id
            },
            success: function(response) {
                $('#img_'+image_id).remove();
            }
        });
    }
}