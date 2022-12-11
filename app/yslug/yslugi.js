$('.brat').click(function (e) {
    e.preventDefault();
    

    $(`input`).removeClass('error');



    //class='bzat'
    //data-tip='<?=$yslug['тип_документа']?>'
    //data-stoim='<?=$yslug['Стоимость']?>'
    //data-nam='<?=$yslug['Название']?>'



    let tip = $('div.bzat').data('tip'),
    stoim = $('div.bzat').data('stoim'),
    nam = $('div.bzat').data('nam'),
    idi = $('div.bzat').data('idi');
    let formData = new FormData();
    formData.append('tip', tip);
    formData.append('stoim', stoim);
    formData.append('nam', nam);
    formData.append('idi', idi);
    $.ajax({
        url: '/app/yslug/mslugi.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
                document.location.href = '/app/yslug/ysluga.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                $('.msg').removeClass('none').text(data.message);

            }
        }
    });
});