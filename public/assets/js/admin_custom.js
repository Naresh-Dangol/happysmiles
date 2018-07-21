
function confirm_delete(query, msg)
{
    if (confirm(msg)) {
        window.location = query;
    }
}

function goToByScroll(id)
{
    $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-')
        ;
}

function get_readable_size(raw_size) // raw_size in bytes
{
    var readable_size = '';
    var size_kb = raw_size/1024 // into kb
    if (size_kb <= 1024) {
        readable_size = parseFloat(size_kb).toFixed(2)+' kb';
    } else {
        var size_mb = size_kb/1024 // into mb
        readable_size = parseFloat(size_mb).toFixed(2)+' mb';
    }
    return readable_size;
}

function validateYouTubeUrl(url)
{
    if (url != undefined || url != '') {
        var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
        var match = url.match(regExp);
        if (match && match[2].length == 11) {
            // valid and converting to embed link
            return 'https://www.youtube.com/embed/' + match[2];
        } else {
            return false;
        }
    }
}