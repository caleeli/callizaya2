<script>
	export let state = '';
</script>

<svg
	viewBox="0 0 540 180"
	xmlns="http://www.w3.org/2000/svg"
	xmlns:bx="https://boxy-svg.com"
>
	<defs>
		<marker
			id="arrow"
			markerWidth="10"
			markerHeight="10"
			refX="5"
			refY="3"
			orient="auto"
		>
			<path d="M0,0 L0,6 L5,3 z" fill="#000"></path>
		</marker>
		<bx:grid x="0" y="0" width="540" height="178.725"></bx:grid>
	</defs>
	<g class="start">
		<circle
			class={state==='inicio' ? 'active' : ''}
			cx="30"
			cy="90.018"
			r="20"
			stroke-width="2"
			style="fill: transparent; paint-order: fill; stroke: rgb(92, 124, 101);"
		></circle>
		<text
			style="fill: rgb(93, 124, 101); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre; transform-origin: -24.9032px 5.99345px;"
			transform="matrix(1.027977, 0, 0, 1.021194, 14.903172, -6.279604)"
		>
			<tspan x="14.007" y="126.793">Solicitud</tspan>
			<tspan x="14.007" dy="1em">​</tspan>
			<tspan>Recibida</tspan>
		</text>
	</g>
	<g class="task" transform="matrix(1, 0, 0, 1, 0, 20)">
		<rect
			class={state==='revisar-solicitud' ? 'active' : ''}
			x="80"
			y="40"
			width="100"
			height="60"
			stroke-width="2"
			fill="white"
			style="stroke: rgb(63, 136, 197);"
			rx="8"
			ry="8"
		></rect>
		<text
			style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
			x="129.503"
			y="75">Revisar solicitud</text
		>
	</g>
	<text
		style="fill: rgb(255, 186, 8); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
		transform="matrix(1.040874, 0, 0, 1.047859, 64.535347, -14.525673)"
		x="241.475"
		y="105">Aprobar solicitud?</text
	>
	<text
		style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
		x="285.669"
		y="35.981">Sí</text
	>
	<g class="task" transform="matrix(1, 0, 0, 1, -9.502991, 0)">
		<rect
			class={state==='notificar-al-solicitante' ? 'active' : ''}
			x="339.503"
			y="10"
			width="100"
			height="60"
			stroke-width="2"
			fill="white"
			rx="8"
			style="stroke: rgb(63, 136, 197);"
		></rect>
		<text
			style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
			x="389.819"
			y="37.851">Notificar al</text
		>
		<text
			style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
			x="389.819"
			y="49.851">solicitante</text
		>
	</g>
	<g class="end">
		<circle
			class={state==='fin' ? 'active' : ''}
			cx="490"
			cy="90.018"
			r="20"
			stroke-width="2"
			fill="white"
			style="stroke: rgb(208, 1, 0);"
		></circle>
		<text
			style="fill: rgb(208, 1, 0); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
			x="524.335"
			y="94.826">Fin</text
		>
	</g>
	<line
		x1="50"
		y1="90"
		x2="80"
		y2="90"
		stroke-width="2"
		marker-end="url(#arrow)"
		style="stroke: rgb(4, 43, 67);"
	></line>
	<line
		x1="180"
		y1="90"
		x2="220"
		y2="90"
		stroke-width="2"
		marker-end="url(#arrow)"
		style="stroke: rgb(4, 43, 67);"
	></line>
	<polyline
		stroke-width="2"
		marker-end="url(#arrow)"
		points="240 70 240 40 330 40"
		style="paint-order: fill markers; stroke: rgb(4, 43, 67);"
		fill="transparent"
	></polyline>
	<g class="task" transform="matrix(1, 0, 0, 1, -9.502989, 100)">
		<rect
			class={state==='rechazar-solicitud' ? 'active' : ''}
			x="339.503"
			y="10"
			width="100"
			height="60"
			stroke-width="2"
			fill="white"
			rx="8"
			style="stroke: rgb(63, 136, 197);"
		></rect>
		<text
			style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
			x="389.819"
			y="37.851">Rechazar</text
		>
		<text
			style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
			x="389.819"
			y="49.851">solicitud</text
		>
	</g>
	<polyline
		stroke-width="2"
		marker-end="url(#arrow)"
		points="240 110 240 140.01800537109375 330 140.01800537109375"
		style="paint-order: fill markers; stroke: rgb(4, 43, 67);"
		fill="transparent"
	></polyline>
	<polyline
		stroke-width="2"
		marker-end="url(#arrow)"
		points="451.25 81.25 451.25 21.25 481.268 21.25"
		style="paint-order: fill markers; stroke: rgb(4, 43, 67); transform-box: fill-box; transform-origin: 50% 50%;"
		fill="transparent"
		transform="matrix(0, 1, -1, 0, -6.259003, 3.759003)"
	></polyline>
	<polyline
		stroke-width="2"
		marker-end="url(#arrow)"
		points="449 99.018 449 159.018 479 159.018"
		style="paint-order: fill markers; stroke: rgb(4, 43, 67); transform-origin: 460px 129.018px;"
		fill="transparent"
		transform="matrix(0, -1, 1, 0, -0.000031, 0)"
	></polyline>
	<text
		style="fill: rgb(4, 43, 67); font-family: Arial; font-size: 12px; text-anchor: middle; white-space: pre;"
		x="287.67"
		y="151.999">No</text
	>
	<line
		style="fill: rgb(216, 216, 216); stroke: rgb(0, 0, 0);"
		x1="236"
		y1="116"
		x2="244"
		y2="112"
	></line>
	<g class="gateway" transform="matrix(1, 0, 0, 1, 0, 20)">
		<polygon
			class={state==='aprobar-solicitud' ? 'active' : ''}
			points="240 50 260 70 240 90 220 70"
			stroke-width="2"
			fill="white"
			style="stroke: rgb(255, 186, 8);"
		></polygon>
		<line
			style="fill: rgb(216, 216, 216); stroke-width: 4px; stroke: rgb(255, 186, 8);"
			x1="233"
			y1="63"
			x2="247"
			y2="77"
		></line>
		<line
			style="fill: rgb(216, 216, 216); stroke-width: 4px; stroke: rgb(255, 186, 8);"
			x1="233"
			y1="77"
			x2="247"
			y2="63"
		></line>
	</g>
</svg>

<style>
	.task .active {
		fill: rgba(63, 136, 197, 30%);
		transition: fill 1s;
	}
	.gateway .active {
		fill: rgba(255, 186, 8, 30%);
		transition: fill 1s;
	}
	.start .active {
		fill: rgba(92, 124, 101, 30%)!important;
		transition: fill 1s;
	}
	.end .active {
		fill: rgba(208, 1, 0, 30%);
		transition: fill 1s;
	}
</style>