!function(){var e=$("#addRoleForm");e.length&&e.validate({rules:{modalRoleName:{required:!0}}}),$(".modal").on("hidden.bs.modal",(function(){$(this).find("form")[0].reset()}));const o=document.querySelector("#selectAll"),t=document.querySelectorAll('[type="checkbox"]');o.addEventListener("change",(e=>{t.forEach((o=>{o.checked=e.target.checked}))}))}();