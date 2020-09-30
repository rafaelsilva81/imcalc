submitFormImc = e => {
    e.preventDefault();
    var formValues= jQuery("#imc-form").serialize();
    jQuery.get( "http://localhost/wordpress/wp-content/plugins/imcalc/calc.php", formValues, function(data) {        
    console.log("DHW");    
})
.done(function(data) {
    var res = JSON.parse(data);
    jQuery("#result").html(res.desc);
  });
}