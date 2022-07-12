//JavaScript de los Poppers
let infoContent = '<img class="imagen rounded w-75 d-block mx-auto" src="./Vista/assets/images/logo-info.jpeg" alt="Logo Informática">'+ 
								  '<div class="text-center fw-bold my-2">Informática en Desarrollo Web</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let contaContent = '<img class="imagen" src="" alt="Logo Contabilidad">'+ 
								  '<div class="text-center fw-bold my-2">Contabilidad y Finanzas</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let accountingContent = '<img class="imagen" src="" alt="Logo Accounting">'+ 
								  '<div class="text-center fw-bold my-2">Accounting</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let secretariadoContent = '<img class="imagen" src="" alt="Logo Bilingual Secretary">'+ 
								  '<div class="text-center fw-bold my-2">Bilingual Secretary</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let automotrizContent = '<img class="imagen" src="" alt="Logo Automotriz">'+ 
								  '<div class="text-center fw-bold my-2">Mecánica Automotriz</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let electroContent = '<img class="imagen" src="" alt="Logo Electrónica">'+ 
								  '<div class="text-center fw-bold my-2">Electrónica Industrial</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let mantenimientoContent = '<img class="imagen" src="" alt="Logo Mantenimiento Industrial">'+ 
								  '<div class="text-center fw-bold my-2">Mantenimiento Industrial</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let presicionContent = '<img class="imagen" src="" alt="Logo Mecánica de Presición">'+ 
								  '<div class="text-center fw-bold my-2">Mecánica de Presición</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';

let disenoContent = '<img class="imagen" src="" alt="Logo Diseño Publicitario">'+ 
								  '<div class="text-center fw-bold my-2">Diseño Publicitario</div>'+
									'<a href="#" class="d-block btn btn-primary w-100 py-1">Visitar</a>';


tippy('.point-info', {
		content: infoContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});
tippy('.point-accounting', {
		content: accountingContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});
tippy('.point-conta', {
		content: contaContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});
tippy('.point-presicion', {
		content: presicionContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});
tippy('.point-mantenimiento', {
		content: mantenimientoContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});

tippy('.point-electro', {
		content: electroContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});

tippy('.point-diseno', {
		content: disenoContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});
tippy('.point-automotriz', {
		content: automotrizContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});
tippy('.point-secretariado', {
		content: secretariadoContent,
		trigger: 'click',
		allowHTML: true,
		duration: 350,
		theme: 'popover-style',
		arrow: false,
		animation: 'open',
});

