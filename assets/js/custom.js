jQuery(document).ready(function (){
    const DOMAIN = window.location.host;
    const PROTOCOL = window.location.protocol;
    jQuery('.site-loader').removeClass('hide');

    jQuery.ajax({
        type: "post",
        url: my_ajax_object.ajax_url,
        data: {
            action: "get_all_hotels_data",
        },
        success: function(data){
            // const BASEPATH = 'https://whattoeat.aventosolutions.com/wp-content/themes/whattoeat/assets/images/zhangliangmala.jpeg';
            const BASEPATH = PROTOCOL+'//'+DOMAIN+'/wp-content/themes/whattoeat';
            let jobj = JSON.parse(data);
            jQuery('.site-loader').addClass('hide');
            jQuery('.c-row-wrap-append').html('<div id="testing" class="custom-cl owl-carousel"></div>');
            jQuery.each( jobj, function( key, value ) {
                let $html = '<div class="c-row"><div class="c-column c-left">\n' +
                    '                <div class="img-wrapper">\n' +
                    '                    <img src="'+BASEPATH + value.image+'" alt="resturant-image" title="'+value.title+'">\n' +
                    '                </div>' +
                    '                <div class="credit-wrap">\n' +
                    '                    <span>Image Credit:</span>\n' +
                    '                    <span>'+value.image_credit+'</span>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '            <div class="c-column c-right">\n' +
                    '                <div class="c-right-inner">\n' +
                    '                    <h1>'+value.title+'</h1>\n' +
                    '                    <div class="zipcode"></div>\n' +
                    '                    <div class="body-wrap">\n' +
                    '                        <span>Tags</span>\n' +
                    '                        <p>'+value.tags+'</p>\n' +
                    '                    </div>\n' +
                    '                    <div class="body-wrap">\n' +
                    '                        <span>Address</span>\n' +
                    '                        <p>'+value.address+'</p>\n' +
                    '                    </div>\n' +
                    '                </div></div></div>';

                jQuery('.custom-cl.owl-carousel').append($html);
            });
            jQuery('.c-row-wrap').addClass('hide');
            var owl = $("#testing");
            owl.owlCarousel({
                items: 1,
                lazyLoad : true,
                nav: true,
                loop: true
            });
            jQuery(".c-row-wrap-append .owl-next").html('<div class="btn-wrapper"><a class="btn-continue">gimme something else</a></div>');
        }
    });

    jQuery('#submit').on('click', function (evt) {
        let _location  = jQuery('#c-location').val();
        let _price  = jQuery('#c-price').val();
        let _selectedArea = jQuery('#areaCode').val();
        if(_location ==="current"){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    jQuery('.site-loader').removeClass('hide');
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    // const lat = 1.362600;
                    // const lng = 103.888050;
                    let latlng = new google.maps.LatLng(lat, lng);
                    let geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': latlng}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            console.log(results[0])
                            if (results[0]) {
                                let zip = [];
                                for (let i=0; i<results[0].address_components.length; i++) {
                                    for (let b=0;b<results[0].address_components[i].types.length;b++) {
                                        if (results[0].address_components[i].types[b] == "postal_code") {
                                            zip = results[0].address_components[i].long_name;
                                            break;
                                        }
                                    }
                                }
                                console.log(zip);
                                if(zip.length > 0) {
                                    jQuery.ajax({
                                        type: "post",
                                        url: my_ajax_object.ajax_url,
                                        data: {
                                            action: "get_hotels_data",
                                            zipcode: zip,
                                            price: _price
                                        },
                                        success: function (data) {
                                            if (data) {
                                                // const BASEPATH = 'https://whattoeat.aventosolutions.com/wp-content/themes/whattoeat';
                                                const BASEPATH = PROTOCOL + '//' + DOMAIN + '/wp-content/themes/whattoeat';
                                                let jobj = JSON.parse(data);
                                                console.log(data);
                                                jQuery('.site-loader').addClass('hide');
                                                jQuery('.c-row-wrap-append').html('<div id="testing" class="custom-cl owl-carousel"></div>');
                                                jQuery.each(jobj, function (key, value) {
                                                    let $html = '<div class="c-row"><div class="c-column c-left">\n' +
                                                        '                <div class="img-wrapper">\n' +
                                                        '                    <img src="' + BASEPATH + value.image + '" alt="resturant-image" title="' + value.title + '">\n' +
                                                        '                </div>\n' +
                                                        '                <div class="credit-wrap">\n' +
                                                        '                    <span>Image Credit:</span>\n' +
                                                        '                    <span>'+value.image_credit+'</span>\n' +
                                                        '                </div>\n' +
                                                        '            </div>\n' +
                                                        '            <div class="c-column c-right">\n' +
                                                        '                <div class="c-right-inner">\n' +
                                                        '                    <h1>' + value.title + '</h1>\n' +
                                                        '                    <div class="zipcode"></div>\n' +
                                                        '                    <div class="body-wrap">\n' +
                                                        '                        <span>Tags</span>\n' +
                                                        '                        <p>' + value.tags + '</p>\n' +
                                                        '                    </div>\n' +
                                                        '                    <div class="body-wrap">\n' +
                                                        '                        <span>Address</span>\n' +
                                                        '                        <p>' + value.address + '</p>\n' +
                                                        '                    </div>\n' +
                                                        '                </div></div></div>';

                                                    jQuery('.custom-cl.owl-carousel').append($html);
                                                });
                                                jQuery('.c-row-wrap').addClass('hide');
                                                var owl = $("#testing");
                                                owl.owlCarousel({
                                                    items: 1,
                                                    lazyLoad: true,
                                                    nav: true,
                                                    loop: true
                                                });
                                                jQuery(".c-row-wrap-append .owl-next").html('<div class="btn-wrapper"><a class="btn-continue">gimme something else</a></div>');
                                            } else {
                                                jQuery('.c-row-wrap-append').html('<h2> Hotel not found near selected area!</h2>');
                                            }
                                        }
                                    });
                                }else{
                                    jQuery('.site-loader').addClass('hide');
                                    jQuery('.c-row-wrap-append').html('<div class="error-msg"><h2>Postal code not found</h2></div>');
                                }
                            } else {
                                console.log("No results found");
                            }
                        } else {
                            console.log("Geocoder failed due to: " + status);
                        }
                    });
                });
            }
        }else if(_location ==="area"){
            if(_selectedArea){
                jQuery('.site-loader').removeClass('hide');
                jQuery.ajax({
                    type: "post",
                    url: my_ajax_object.ajax_url,
                    data: {
                        action: "get_hotels_with_area",
                        zipcodes: _selectedArea,
                        price  : _price
                    },
                    success: function(data) {
                        if (data) {
                            const BASEPATH = PROTOCOL + '//' + DOMAIN + '/wp-content/themes/whattoeat';
                            let jobj = JSON.parse(data);
                            jQuery('.site-loader').addClass('hide');
                            jQuery('.c-row-wrap-append').html('<div id="testing" class="custom-cl owl-carousel"></div>');
                            jQuery.each(jobj, function (key, value) {
                                let $html = '<div class="c-row"><div class="c-column c-left">\n' +
                                    '                <div class="img-wrapper">\n' +
                                    '                    <img src="' + BASEPATH + value.image + '" alt="resturant-image" title="' + value.title + '">\n' +
                                    '                </div>\n' +
                                    '                <div class="credit-wrap">\n' +
                                    '                    <span>Image Credit:</span>\n' +
                                    '                    <span>'+value.image_credit+'</span>\n' +
                                    '                </div>\n' +
                                    '            </div>\n' +
                                    '            <div class="c-column c-right">\n' +
                                    '                <div class="c-right-inner">\n' +
                                    '                    <h1>' + value.title + '</h1>\n' +
                                    '                    <div class="zipcode"></div>\n' +
                                    '                    <div class="body-wrap">\n' +
                                    '                        <span>Tags</span>\n' +
                                    '                        <p>' + value.tags + '</p>\n' +
                                    '                    </div>\n' +
                                    '                    <div class="body-wrap">\n' +
                                    '                        <span>Address</span>\n' +
                                    '                        <p>' + value.address + '</p>\n' +
                                    '                    </div>\n' +
                                    '                </div></div></div>';

                                jQuery('.custom-cl.owl-carousel').append($html);
                            });
                            jQuery('.c-row-wrap').addClass('hide');
                            var owl = $("#testing");
                            owl.owlCarousel({
                                items: 1,
                                lazyLoad: true,
                                nav: true,
                                loop: true
                            });
                            jQuery(".c-row-wrap-append .owl-next").html('<div class="btn-wrapper"><a class="btn-continue">gimme something else</a></div>')
                        } else {
                            jQuery('.c-row-wrap-append').html('<h2> Hotel not found near you!</h2>');
                        }
                    }
                });
            }else{
                alert('Please choose at least one area')
            }
        }else if(_location ==="all"){
            jQuery('.site-loader').removeClass('hide');
            jQuery.ajax({
                type: "post",
                url: my_ajax_object.ajax_url,
                data: {
                    action: "get_all_hotels_data",
                    price  : _price
                },
                success: function(data) {
                    if (data) {
                        const BASEPATH = PROTOCOL + '//' + DOMAIN + '/wp-content/themes/whattoeat';
                        let jobj = JSON.parse(data);
                        jQuery('.site-loader').addClass('hide');
                        jQuery('.c-row-wrap-append').html('<div id="testing" class="custom-cl owl-carousel"></div>');
                        jQuery.each(jobj, function (key, value) {
                            let $html = '<div class="c-row"><div class="c-column c-left">\n' +
                                '                <div class="img-wrapper">\n' +
                                '                    <img src="' + BASEPATH + value.image + '" alt="resturant-image" title="' + value.title + '">\n' +
                                '                </div>\n' +
                                '                <div class="credit-wrap">\n' +
                                '                    <span>Image Credit:</span>\n' +
                                '                    <span>'+value.image_credit+'</span>\n' +
                                '                </div>\n' +
                                '            </div>\n' +
                                '            <div class="c-column c-right">\n' +
                                '                <div class="c-right-inner">\n' +
                                '                    <h1>' + value.title + '</h1>\n' +
                                '                    <div class="zipcode"></div>\n' +
                                '                    <div class="body-wrap">\n' +
                                '                        <span>Tags</span>\n' +
                                '                        <p>' + value.tags + '</p>\n' +
                                '                    </div>\n' +
                                '                    <div class="body-wrap">\n' +
                                '                        <span>Address</span>\n' +
                                '                        <p>' + value.address + '</p>\n' +
                                '                    </div>\n' +
                                '                </div></div></div>';

                            jQuery('.custom-cl.owl-carousel').append($html);
                        });
                        jQuery('.c-row-wrap').addClass('hide');
                        var owl = $("#testing");
                        owl.owlCarousel({
                            items: 1,
                            lazyLoad: true,
                            nav: true,
                            loop: true
                        });

                        jQuery(".c-row-wrap-append .owl-next").html('<div class="btn-wrapper"><a class="btn-continue">gimme something else</a></div>')
                    }else{
                        jQuery('.c-row-wrap-append').html('<h2> Hotel not found near you!</h2>');
                    }
                }
            });
        }
        else{
            alert('Please select location');
        }
    });
    jQuery('#c-location').on('select2:select', function (evt){
        let _location  = jQuery('#c-location').val();
        if(_location ==="area"){
            jQuery('#areaModal').modal('show');
        }
    });
    jQuery(document).on('mouseup', '#select2-c-location-results li:nth-child(3).select2-results__option[aria-selected=true]', function (e) {
        jQuery('#areaModal').modal('show');
    });


    jQuery('#c-location').select2({
        allowHtml: true,
        placeholder: "Location",
        allowClear: true,
        minimumResultsForSearch: -1
    });

    jQuery("#c-price").select2({
        closeOnSelect : false,
        placeholder : "Any price",
        allowHtml: true,
        allowClear: true,
        tags: true
    });

    jQuery('#c-price').on('select2:opening', function (e) {
        jQuery('.select2-selection__choice__remove').click();
    });
    jQuery('#c-price').on('select2:select', function (e) {
        let data = e.params.data;
        let priceSelector1 = jQuery('#select2-c-price-results li:nth-child(2)');
        let priceSelector2 = jQuery('#select2-c-price-results li:nth-child(3)');
        let priceSelector3 = jQuery('#select2-c-price-results li:nth-child(4)');

        if(data.id === 'all') {
            jQuery("#c-price").val(['all']).trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', true);
            priceSelector1.attr('aria-selected', false);
            priceSelector2.attr('aria-selected', false);
            priceSelector3.attr('aria-selected', false);
        } else if((data.id === '1') && (priceSelector2.attr('aria-selected') === 'false') && (priceSelector3.attr('aria-selected') === 'false')){
            jQuery("#c-price").val([1]).trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', false);
        } else if((data.id === '2') && (priceSelector1.attr('aria-selected') === 'false') && (priceSelector3.attr('aria-selected') === 'false')){
            jQuery("#c-price").val([2]).trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', false);
        } else if((data.id === '3') && (priceSelector1.attr('aria-selected') === 'false') && (priceSelector2.attr('aria-selected') === 'false')){
            jQuery("#c-price").val([3]).trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', false);
        } else if((data.id === '2') && (priceSelector1.attr('aria-selected') === 'true') && (priceSelector3.attr('aria-selected') === 'false')){
            jQuery("#c-price").val([1,2]).trigger('change');
        } else if((data.id === '2') && (priceSelector1.attr('aria-selected') === 'false') && (priceSelector3.attr('aria-selected') === 'true')){
            jQuery("#c-price").val([2,3]).trigger('change');
        } else if((data.id === '3') && (priceSelector1.attr('aria-selected') === 'true') && (priceSelector2.attr('aria-selected') === 'false')){
            jQuery("#c-price").val([1,3]).trigger('change');
        } else if((data.id === '3') && (priceSelector1.attr('aria-selected') === 'false') && (priceSelector2.attr('aria-selected') === 'true')){
            jQuery("#c-price").val([2,3]).trigger('change');
        } else if((data.id === '1') && (priceSelector2.attr('aria-selected') === 'true') && (priceSelector3.attr('aria-selected') === 'false')){
            jQuery("#c-price").val([1,2]).trigger('change');
        } else if((data.id === '1') && (priceSelector2.attr('aria-selected') === 'false') && (priceSelector3.attr('aria-selected') === 'true')){
            jQuery("#c-price").val([1,3]).trigger('change');
        } else if((data.id === '1') && (priceSelector2.attr('aria-selected') === 'true') && (priceSelector3.attr('aria-selected') === 'true')){
            jQuery("#c-price").val('all').trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', true);
            priceSelector1.attr('aria-selected', false);
            priceSelector2.attr('aria-selected', false);
            priceSelector3.attr('aria-selected', false);
        } else if((data.id === '2') && (priceSelector1.attr('aria-selected') === 'true') && (priceSelector3.attr('aria-selected') === 'true')){
            jQuery("#c-price").val('all').trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', true);
            priceSelector1.attr('aria-selected', false);
            priceSelector2.attr('aria-selected', false);
            priceSelector3.attr('aria-selected', false);
        } else if((data.id === '3') && (priceSelector1.attr('aria-selected') === 'true') && (priceSelector2.attr('aria-selected') === 'true')){
            jQuery("#c-price").val('all').trigger('change');
            jQuery('#select2-c-price-results li:nth-child(1)').attr('aria-selected', true);
            priceSelector1.attr('aria-selected', false);
            priceSelector2.attr('aria-selected', false);
            priceSelector3.attr('aria-selected', false);
        }

    });
    
    jQuery('#c-price').val('all').trigger('change.select2');
    jQuery('#c-location').val('all').trigger('change.select2');

    jQuery(".c-row-wrap.owl-carousel").owlCarousel({
        items : 1,
        nav:true,
        lazyLoad : true,
        // navigation : true
        loop: true
    });

    jQuery('#save_value').on('click', function (){
        let areaVal = [];
        let areaName = [];
        jQuery(':checkbox:checked').each(function(i){
            areaVal[i] = jQuery(this).val();
            areaName[i] = jQuery(this).next().text();
        });
        console.log(areaVal.length);
        if(areaVal.length > 0){
            jQuery('#select2-c-location-container').text(areaName);
            jQuery('#areaCode').val(areaVal);
        }
    });

    jQuery(function() {
        enable_cb();
        jQuery("#anyprice").click(enable_cb);
    });

    function enable_cb() {
        if (this.checked) {
            jQuery("input.price").removeAttr("disabled");
        } else {
            jQuery("input.price").attr("disabled", true);
        }
    }

    jQuery( ".owl-next").html('<div class="btn-wrapper"><a class="btn-continue">gimme something else</a></div>');

});