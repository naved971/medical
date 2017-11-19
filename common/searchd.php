
<form>
    <div class="content">
<input type="text" class="search" id="searchid" placeholder="Search for people" />
<input type="text" class="search" id="searchbyLocation" placeholder="Location Search" />
<button id="searchbtn">
<i class="fa fa-search" aria-hidden="true"></i>
</button>
<br /> 
<div id="result"></div>
</div>
</form>
<style type="text/css">
#searchbtn {
background-color:yellow;
border: solid 1px #000;
padding: 10px 15px;
font-size: 14px;
}
.content{
width: 900px;
margin:0 auto;
}
#searchid
{
width:300px;
border:solid 1px #000;
padding:10px;
font-size:14px;
}
#searchbyLocation
{
width:200px;
border:solid 1px #000;
padding:10px;
font-size:14px;
}
#result
{
position:absolute;
width:500px;
padding:10px;
display:none;
margin-top:-23px;
border-top:0px;
overflow:hidden;
border:1px #CCC solid;
background-color: white;
}
.show
{
padding:10px; 
border-bottom:1px #999 dashed;
font-size:15px; 
height:70px;
}
.show:hover
{
background:#4c66a4;
color:#FFF;
cursor:pointer;
}
</style>
<script type="text/javascript">
$(function(){
    
$(".search").keyup(function() { 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid != "" ){
    $.ajax({
    type: "POST",
    url: "../medical/common/result.php",
    data: dataString,
    cache: false,
    success: function(html){
    $("#result").html(html).show();
    }
    });
}else{

}    $("#result").html("").hide();

return false;    
});


jQuery("#result").on("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name.trim()).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});

});
 
</script>
<!-- 
<form id="searchCriteria" name="searchCriteria" data-test="searchCriteria" method="get" action="/search/">
<div id="searchFieldsContainer" class="sg-row" data-inactiveprocedurename="" data-inactiveprocedureid="" data-defaulthealthcarrier="-1" data-defaulthealthplan="-1" data-defaultdentalcarrier="-1" data-defaultdentalplan="-1" data-defaultspecialty="0" data-defaultprocedure="0" data-insurancetype="2">

    <div class="sg-large-11 sg-medium-11 sg-columns sg-small-offset-1 no-labels-width">
        <div class="sg-form-row js-form-row js-homepage-specialty-dropdown"><div data-reactroot="" class="js-search-dropdown universalSearch__search-container___3E-TS"><div class="searchTextBox__SearchTextBoxWrapper-jzvkHk fecEwn"><input type="text" class="searchTextBox__StyledInput-bPHPYH fgczcL" data-test="universal-search-text-box" placeholder="enter condition, procedure, doctor name..." value=""><svg viewBox="0 0 40 40" class="searchTextBox__StyledClose-HHdyu kiDKJt _base__Icon-jSBLFq jEaJSs" data-test="icon-close" hidden=""><polygon fill="#00234B" points="40,4 36,0 20,16 4,0 0,4 16,20 0,36 4,40 20,24 36,40 40,36 24,20"></polygon></svg></div></div></div>
        <input id="specialty-input" type="hidden" name="dr_specialty" value="106">
        <input id="procedure-input" type="hidden" name="reason_visit" value="1032">
        <input id="name-input" type="hidden" name="name" value="">
        <input id="search-query-input" type="hidden" name="searchQuery" value="">
        <input id="search-query-guid-input" type="hidden" name="searchQueryGuid" value="6299899e-b22a-4a94-9e7f-7869e4a9e4cf">
        <input id="has-no-results-input" type="hidden" name="hasNoSearchResults" value="false">
        <input id="selected-option-input" type="hidden" name="selectedAutocompleteOption" value="Acid Reflux / Heartburn">
    </div>

    <div class="sg-large-4 sg-medium-4 sg-columns">
        <div class="hp-inline-search-criteria-spacer no-labels-test"><div data-reactroot="" class="js-location-dropdown locationAutoComplete__location-search-container___C14Xp"><div class="searchTextBox__SearchTextBoxWrapper-jzvkHk fecEwn"><input type="text" class="searchTextBox__StyledInput-bPHPYH fgczcL" data-test="location" placeholder="zip code or city" value=""><svg viewBox="0 0 40 40" class="searchTextBox__StyledClose-HHdyu kiDKJt _base__Icon-jSBLFq jEaJSs" data-test="icon-close" hidden=""><polygon fill="#00234B" points="40,4 36,0 20,16 4,0 0,4 16,20 0,36 4,40 20,24 36,40 40,36 24,20"></polygon></svg></div></div></div>
    </div>

   <div class="sg-large-1 sg-medium-1 sg-columns sg-end">
        <a id="refine_search" class="sg-btn sg-btn-lg sg-fluid submit-search-button search-icon-container js-submit-search-button no-labels-test" name="refine_search" data-test="search-criteria-submit-button">
            <span class="hp-search-icon"></span>
        </a>
    </div> 


</div>
<input type="hidden" name="insurance_carrier" value="-1"><input type="hidden" name="insurance_plan" value="-1"></form> -->