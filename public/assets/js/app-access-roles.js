"use strict";$((function(){var e=$(".datatables-users"),a={1:{title:"Pending",class:"bg-label-warning"},2:{title:"Active",class:"bg-label-success"},3:{title:"Inactive",class:"bg-label-secondary"}},t=baseUrl+"app/user/view/account";if(e.length)var s=e.DataTable({ajax:assetsPath+"json/user-list.json",columns:[{data:""},{data:"full_name"},{data:"role"},{data:"current_plan"},{data:"billing"},{data:"status"},{data:""}],columnDefs:[{className:"control",orderable:!1,searchable:!1,responsivePriority:2,targets:0,render:function(e,a,t,s){return""}},{targets:1,responsivePriority:4,render:function(e,a,s,l){var n=s.full_name,r=s.email,i=s.avatar;if(i)var c='<img src="'+assetsPath+"img/avatars/"+i+'" alt="Avatar" class="rounded-circle">';else{var o=["success","danger","warning","info","primary","secondary"][Math.floor(6*Math.random())],d=(n=s.full_name).match(/\b\w/g)||[];c='<span class="avatar-initial rounded-circle bg-label-'+o+'">'+(d=((d.shift()||"")+(d.pop()||"")).toUpperCase())+"</span>"}return'<div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar me-3">'+c+'</div></div><div class="d-flex flex-column"><a href="'+t+'" class="text-body text-truncate"><span class="fw-medium">'+n+'</span></a><small class="text-muted">@'+r+"</small></div></div>"}},{targets:2,render:function(e,a,t,s){var l=t.role;return"<span class='text-truncate d-flex align-items-center'>"+{Subscriber:'<span class="badge badge-center rounded-pill bg-label-warning me-3 w-px-30 h-px-30"><i class="ti ti-user ti-sm"></i></span>',Author:'<span class="badge badge-center rounded-pill bg-label-success me-3 w-px-30 h-px-30"><i class="ti ti-settings ti-sm"></i></span>',Maintainer:'<span class="badge badge-center rounded-pill bg-label-primary me-3 w-px-30 h-px-30"><i class="ti ti-chart-pie-2 ti-sm"></i></span>',Editor:'<span class="badge badge-center rounded-pill bg-label-info me-3 w-px-30 h-px-30"><i class="ti ti-edit ti-sm"></i></span>',Admin:'<span class="badge badge-center rounded-pill bg-label-secondary me-3 w-px-30 h-px-30"><i class="ti ti-device-laptop ti-sm"></i></span>'}[l]+l+"</span>"}},{targets:3,render:function(e,a,t,s){return'<span class="fw-medium">'+t.current_plan+"</span>"}},{targets:5,render:function(e,t,s,l){var n=s.status;return'<span class="badge '+a[n].class+'" text-capitalized>'+a[n].title+"</span>"}},{targets:-1,title:"Actions",searchable:!1,orderable:!1,render:function(e,a,s,l){return'<div class="d-flex align-items-center"><a href="'+t+'" class="btn btn-sm btn-icon"><i class="ti ti-eye"></i></a><a href="javascript:;" class="text-body delete-record"><i class="ti ti-trash ti-sm mx-2"></i></a><a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;"" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div>'}}],order:[[1,"desc"]],dom:'<"row mx-2"<"col-sm-12 col-md-4 col-lg-6" l><"col-sm-12 col-md-8 col-lg-6"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center align-items-center flex-sm-nowrap flex-wrap me-1"<"me-3"f><"user_role w-px-200 pb-3 pb-sm-0">>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',language:{sLengthMenu:"Show _MENU_",search:"Search",searchPlaceholder:"Search.."},responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(e){return"Details of "+e.data().full_name}}),type:"column",renderer:function(e,a,t){var s=$.map(t,(function(e,a){return""!==e.title?'<tr data-dt-row="'+e.rowIndex+'" data-dt-column="'+e.columnIndex+'"><td>'+e.title+":</td> <td>"+e.data+"</td></tr>":""})).join("");return!!s&&$('<table class="table"/><tbody />').append(s)}}},initComplete:function(){this.api().columns(2).every((function(){var e=this,a=$('<select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option></select>').appendTo(".user_role").on("change",(function(){var a=$.fn.dataTable.util.escapeRegex($(this).val());e.search(a?"^"+a+"$":"",!0,!1).draw()}));e.data().unique().sort().each((function(e,t){a.append('<option value="'+e+'" class="text-capitalize">'+e+"</option>")}))}))}});$(".datatables-users tbody").on("click",".delete-record",(function(){s.row($(this).parents("tr")).remove().draw()})),setTimeout((()=>{$(".dataTables_filter .form-control").removeClass("form-control-sm"),$(".dataTables_length .form-select").removeClass("form-select-sm")}),300)})),function(){var e=document.querySelectorAll(".role-edit-modal"),a=document.querySelector(".add-new-role"),t=document.querySelector(".role-title");a.onclick=function(){t.innerHTML="Add New Role"},e&&e.forEach((function(e){e.onclick=function(){t.innerHTML="Edit Role"}}))}();