$((function(){var t=$(".validate-form"),e="../../../app-assets/",a=$(".invoice-list-table"),n="app-invoice-preview.html",o="app-invoice-edit.html",s=$(".account-number-mask"),i=$(".account-zip-code"),l=$(".select2"),c=document.querySelector(".cancel-subscription");if("laravel"===$("body").attr("data-framework")&&(e=$("body").attr("data-asset-path"),n=e+"app/invoice/preview",o=e+"app/invoice/edit"),t.length&&t.each((function(){var t=$(this);t.validate({rules:{addCard:{required:!0},companyName:{required:!0},billingEmail:{required:!0}}}),t.on("submit",(function(t){t.preventDefault()}))})),c&&(c.onclick=function(){Swal.fire({text:"Are you sure you would like to cancel your subscription?",icon:"warning",showCancelButton:!0,confirmButtonText:"Yes",customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-outline-danger ms-1"},buttonsStyling:!1}).then((function(t){t.value?Swal.fire({icon:"success",title:"Unsubscribed!",text:"Your subscription cancelled successfully.",customClass:{confirmButton:"btn btn-success"}}):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"Cancelled",text:"Unsubscription Cancelled!!",icon:"error",customClass:{confirmButton:"btn btn-success"}})}))}),s.length&&s.each((function(){new Cleave($(this),{phone:!0,phoneRegionCode:"US"})})),i.length&&i.each((function(){new Cleave($(this),{delimiter:"",numeral:!0})})),l.length&&l.each((function(){var t=$(this);t.wrap('<div class="position-relative"></div>'),t.select2({dropdownParent:t.parent()})})),a.length){a.DataTable({ajax:e+"data/invoice-list.json",autoWidth:!1,pageLength:6,columns:[{data:"responsive_id"},{data:"invoice_id"},{data:"invoice_status"},{data:"issued_date"},{data:"due_date"},{data:"total"},{data:"balance"},{data:"invoice_status"},{data:""}],columnDefs:[{className:"control",responsivePriority:2,targets:0},{targets:1,width:"46px",render:function(t,e,a,o){var s=a.invoice_id;return'<a class="fw-bold" href="'+n+'"> #'+s+"</a>"}},{targets:2,width:"42px",render:function(t,e,a,n){var o=a.invoice_status,s=a.due_date,i={Sent:{class:"bg-light-secondary",icon:"send"},Paid:{class:"bg-light-success",icon:"check-circle"},Draft:{class:"bg-light-primary",icon:"save"},Downloaded:{class:"bg-light-info",icon:"arrow-down-circle"},"Past Due":{class:"bg-light-danger",icon:"info"},"Partial Payment":{class:"bg-light-warning",icon:"pie-chart"}};return"<span data-bs-toggle='tooltip' data-bs-html='true' title='<span>"+o+'<br> <span class="fw-bold">Balance:</span> '+a.balance+'<br> <span class="fw-bold">Due Date:</span> '+s+"</span>'><div class=\"avatar avatar-status "+i[o].class+'"><span class="avatar-content">'+feather.icons[i[o].icon].toSvg({class:"avatar-icon"})+"</span></div></span>"}},{targets:3,width:"73px",render:function(t,e,a,n){return"$"+a.total}},{targets:4,width:"130px",render:function(t,e,a,n){var o=new Date(a.issued_date);return moment(o).format("DD MMM YYYY")}},{targets:5,width:"130px",render:function(t,e,a,n){var o=new Date(a.due_date);return moment(o).format("DD MMM YYYY")}},{targets:6,width:"98px",render:function(t,e,a,n){var o=a.balance;if(0===o){return'<span class="badge rounded-pill badge-light-success" text-capitalized> Paid </span>'}return'<span class="d-none">'+o+"</span>"+o}},{targets:7,visible:!1},{targets:-1,title:"Actions",width:"80px",orderable:!1,render:function(t,e,a,s){return'<div class="d-flex align-items-center col-actions"><a class="me-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Mail">'+feather.icons.send.toSvg({class:"font-medium-2 text-body"})+'</a><a class="me-25" href="'+n+'" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Invoice">'+feather.icons.eye.toSvg({class:"font-medium-2 text-body"})+'</a><div class="dropdown"><a class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">'+feather.icons["more-vertical"].toSvg({class:"font-medium-2 text-body"})+'</a><div class="dropdown-menu dropdown-menu-end"><a href="#" class="dropdown-item">'+feather.icons.download.toSvg({class:"font-small-4 me-50"})+'Download</a><a href="'+o+'" class="dropdown-item">'+feather.icons.edit.toSvg({class:"font-small-4 me-50"})+'Edit</a><a href="#" class="dropdown-item">'+feather.icons.trash.toSvg({class:"font-small-4 me-50"})+'Delete</a><a href="#" class="dropdown-item">'+feather.icons.copy.toSvg({class:"font-small-4 me-50"})+"Duplicate</a></div></div></div>"}}],order:[[1,"desc"]],dom:'<"card-header pt-1 pb-25"<"head-label"><"dt-action-buttons text-end"B>>t',buttons:[{extend:"collection",className:"btn btn-outline-secondary dropdown-toggle",text:feather.icons["external-link"].toSvg({class:"font-small-4 me-50"})+"Export",buttons:[{extend:"print",text:feather.icons.printer.toSvg({class:"font-small-4 me-50"})+"Print",className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7]}},{extend:"csv",text:feather.icons["file-text"].toSvg({class:"font-small-4 me-50"})+"Csv",className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7]}},{extend:"excel",text:feather.icons.file.toSvg({class:"font-small-4 me-50"})+"Excel",className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7]}},{extend:"pdf",text:feather.icons.clipboard.toSvg({class:"font-small-4 me-50"})+"Pdf",className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7]}},{extend:"copy",text:feather.icons.copy.toSvg({class:"font-small-4 me-50"})+"Copy",className:"dropdown-item",exportOptions:{columns:[3,4,5,6,7]}}],init:function(t,e,a){$(e).removeClass("btn-secondary"),$(e).parent().removeClass("btn-group"),setTimeout((function(){$(e).closest(".dt-buttons").removeClass("btn-group").addClass("d-inline-flex")}),50)}}],responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(t){return"Details of "+t.data().client_name}}),type:"column",renderer:function(t,e,a){var n=$.map(a,(function(t,e){return 2!==t.columnIndex?'<tr data-dt-row="'+t.rowIdx+'" data-dt-column="'+t.columnIndex+'"><td>'+t.title+":</td> <td>"+t.data+"</td></tr>":""})).join("");return!!n&&$('<table class="table"/>').append("<tbody>"+n+"</tbody>")}}},initComplete:function(){$(document).find('[data-bs-toggle="tooltip"]').tooltip()},drawCallback:function(){$(document).find('[data-bs-toggle="tooltip"]').tooltip()}});$("div.head-label").html('<h4 class="card-title">Billing History</h4>')}}));