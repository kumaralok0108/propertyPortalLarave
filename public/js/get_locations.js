$('#countryId').on('change', function(e){
    e.preventDefault();
var countryId=$(this).val();
var get_state_url=$('#get_state_url').val();

$.ajax({
    url: get_state_url+'/'+countryId,
    method: 'GET',
    data: {countryId:countryId},
    dataType: 'json',
    success:function(result)
    {
        $("#stateId").empty();
        $('#stateId').append(result.state);
        $('select').niceSelect('destroy'); //destroy the plugin 
        $('select').niceSelect(); //apply again
    },
    error: function(response) {
        console.log(response);
    }
     });


});

// Select City on chnages State 

 $('#stateId').on('change', function(e){
    e.preventDefault();
var stateId=$(this).val();
var get_city_url=$('#get_city_url').val();

$.ajax({
    url: get_city_url+'/'+stateId,
    method: 'GET',
    data: {stateId:stateId},
    dataType: 'json',
    success:function(result)
    {
        $("#Cityid").empty();
        $('#Cityid').append(result.city);
        $('select').niceSelect('destroy'); //destroy the plugin 
        $('select').niceSelect(); //apply again
    },
    error: function(response) {
        console.log(response);
    }
     });


});



/** *******************UPDATE************* */
$('#countryId').on('change', function(e){
    e.preventDefault();
var countryId=$(this).val();
var get_update_state_url=$('#get_update_state_url').val();

$.ajax({
    url: get_update_state_url+'/'+countryId,
    method: 'GET',
    data: {countryId:countryId},
    dataType: 'json',
    success:function(result)
    {
        $("#stateId").empty();
        $('#stateId').append(result.state);
        $('select').niceSelect('destroy'); //destroy the plugin 
        $('select').niceSelect(); //apply again
    },
    error: function(response) {
        console.log(response);
    }
     });


});

// Select City on chnages State 

 $('#stateId').on('change', function(e){
    e.preventDefault();
var stateId=$(this).val();
var get_update_city_url=$('#get_update_city_url').val();

$.ajax({
    url: get_update_city_url+'/'+stateId,
    method: 'GET',
    data: {stateId:stateId},
    dataType: 'json',
    success:function(result)
    {
        $("#Cityid").empty();
        $('#Cityid').append(result.city);
        $('select').niceSelect('destroy'); //destroy the plugin 
        $('select').niceSelect(); //apply again
    },
    error: function(response) {
        console.log(response);
    }
     });


});

/** **************END UPDATE********** */


// get state url admin

$('#countryId').on('change', function(e){
    e.preventDefault();
var countryId=$(this).val();
var get_state_url_admin=$('#get_state_url_admin').val();

$.ajax({
    url: get_state_url_admin+'/'+countryId,
    method: 'GET',
    data: {countryId:countryId},
    dataType: 'json',
    success:function(result)
    {
        $("#stateId").empty();
        $('#stateId').append(result.state);
        $('select').niceSelect('destroy'); //destroy the plugin 
        $('select').niceSelect(); //apply again
    },
    error: function(response) {
        console.log(response);
    }
     });


});

// get_state_city_url_admin

$('#countryId').on('change', function(e){
    e.preventDefault();
var countryId=$(this).val();
var get_state_city_url_admin=$('#get_state_city_url_admin').val();

$.ajax({
    url: get_state_city_url_admin+'/'+countryId,
    method: 'GET',
    data: {countryId:countryId},
    dataType: 'json',
    success:function(result)
    {
        $("#stateId").empty();
        $('#stateId').append(result.state);
        $('select').niceSelect('destroy'); //destroy the plugin 
        $('select').niceSelect(); //apply again
    },
    error: function(response) {
        console.log(response);
    }
     });


});