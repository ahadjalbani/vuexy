$((function(){var e="../../../app-assets/",a=$(".add-credit-card-mask"),t=$("#addNewCardValidation"),d=$(".add-expiry-date-mask"),n=$(".add-cvv-code-mask");"laravel"===$("body").attr("data-framework")&&(e=$("body").attr("data-asset-path")),a.length&&a.each((function(){new Cleave($(this),{creditCard:!0,onCreditCardTypeChanged:function(a){document.querySelector(".add-card-type").innerHTML=""!=a&&"unknown"!=a?'<img src="'+e+"images/icons/payments/"+a+'-cc.png" height="24"/>':""}})})),d.length&&d.each((function(){new Cleave($(this),{date:!0,delimiter:"/",datePattern:["m","y"]})})),n.length&&n.each((function(){new Cleave($(this),{numeral:!0,numeralPositiveOnly:!0})})),t.length&&t.validate({rules:{modalAddCard:{required:!0}}})}));