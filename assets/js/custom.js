const base_url = window.location.origin + '/projects/eliza/';


$.ajax({
    url: base_url + "getgeneraldetails",
    type: 'get',
    cache: true,
    contentType: false,
    processData: false,
    success: function(result) {
        $(".vendorlogo").html('<img class="main__logo--img " src="' + base_url + result.data.logo + '" alt="logo-img" style="width:100px;">');
        $(".contactnumber").html("+91-" + result.data.mobile);
        $(".contactaddress").html(result.data.address);
        $(".vendoremail").html('<a href="mailto:' + result.data.email + '">' + result.data.email + '</a>');
    },
})


$.ajax({
    url: base_url + "getbannerdetails",
    type: 'get',
    cache: true,
    contentType: false,
    processData: false,
    success: function(result) {
        $("#bannerid").html(result);

    },
})


$.ajax({
    url: base_url + "gethomecategories",
    type: 'get',
    cache: true,
    contentType: false,
    processData: false,
    success: function(result) {
        $("#homecategories").html(result);
    },
})


$.ajax({
    url: base_url + "getproductofallcategories",
    type: 'get',
    cache: true,
    contentType: false,
    processData: false,
    success: function(result) {
        $("#procategories").html(result);
    },
})



$.ajax({
    url: base_url + "gethomepageblogs",
    type: 'get',
    cache: true,
    contentType: false,
    processData: false,
    success: function(result) {
        $("#blogsdiv").html(result);
    },
})


$.ajax({
    url: base_url + "gethomepagetestimonial",
    type: 'get',
    cache: true,
    contentType: false,
    processData: false,
    success: function(result) {
        $("#testimonialdiv").html(result);
    },
})



checkcart();

function checkcart() {
    $.ajax({
        url: base_url + "getcart",
        type: 'get',
        cache: true,
        contentType: false,
        processData: false,
        success: function(result) {
            $(".cart-content").html(result);
            $(".count-style").html($(".count-style").html());
        },
    })
}


/* <script>
    $(window).load(function() {
        $('#headtitle').each(function(index) {
            document.getElementsByTagName('title')[0].textContent = document.getElementById('headtitle').textContent + (" - J.C.B Modern Senior Secondary School");              
        });
    });    
</script> */


$(document).ready(function() {
    $(".addtocardbtn").on('click', (function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        var varient = $(this).data('varient');
        var qty = $(this).data('qty');
        var color = $(this).data('color');

        $.ajax({
            url: base_url + "add-to-cart",
            type: "post",
            data: {
                id: id,
                varient: varient,
                qty: qty,
                color: color
            },
            success: function(response) {
                if (response.status == true) {
                    checkcart();
                } else {

                }
            }
        });
    }));
});



function redirectologin(id) {
    window.location.href = id;
}


function showsnack() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
}




$(document).on('submit', '#newsletter-form', function(ev) {
    $('.error').html('');
    err = 0;

    ev.preventDefault(); // Prevent browers default submit.
    var formData = new FormData(this);
    var error = false;

    var email = $("#newsemail").val();

    if (email == '') {
        err = 1;
        $("#erroremail").html('Please enter your Email address');
    }

    if (err == 0) {
        $.ajax({
            url: base_url + 'savenewsletter',
            type: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $("#submitnewserr").html("<span style='color:yellow'>Waiting</span>");
            },
            success: function(result) {
                if (result.code == 200) {
                    $("#submitnewserr").html("<span style='color:green'>Thankyou for submit your query. Our Team will contact you shortly</span>");
                } else {
                    $("#submitnewserr").html(result.message);
                }
            },
        })
    }
})