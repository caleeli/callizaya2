<script>
	import PetriNet from "../lib/PetriNet.js";
    import { onMount, afterUpdate } from 'svelte';

	let svg;
	let net = new PetriNet();
	let tokenX = 0;
	let tokenY = 0;
	let scrollContainer;

	net.addPlace("P1", 1);
	net.addPlace("P2", 0);
	net.addPlace("P3", 0);
	net.addPlace("P4", 0);

	net.addTransition("T1", ["P1"], ["P2"]);
	net.addTransition("T2", ["P2"], ["P3"]);
	net.addTransition("T3", ["P3"], ["P4"]);
	net.addTransition("T4", ["P4"], ["P2"]);
	net.addTransition("T5", ["P4"], ["P1"]);

	function refreshPosition() {
		const position = net.getPosition(svg);
		tokenX = position.x;
		tokenY = position.y;
		net = net;
	}

	function fire(transition) {
		net.fire(transition);
		refreshPosition();
	}

    function scrollToBottom() {
        if (scrollContainer) {
            scrollContainer.scrollTop = scrollContainer.scrollHeight;
        }
    }

	// Scroll al final después de cada actualización
	afterUpdate(() => {
		scrollToBottom();
	});

	// on dom loaded
	onMount(() => {
		refreshPosition();
		scrollToBottom();
	});
</script>
<!-- flex container horizontal elementos distribuidos uniformemente para ocupar todo el espacio-->
<div class="flex flex-row justify-evenly">
<svg bind:this={svg} width="320" height="180" viewBox="0 0 320 180" xmlns="http://www.w3.org/2000/svg">
	<defs>
	  <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="3" orient="auto" markerUnits="strokeWidth">
		<path d="M0,0 L0,6 L5,3 z" fill="black"></path>
	  </marker>
	</defs>
	<g>
	  <circle id="P1" cx="40" cy="40" r="20" stroke="black" stroke-width="2" fill="white"></circle>
	  <text x="33" y="45" font-family="Arial" font-size="12" fill="black" style="white-space: pre; font-size: 12px;">P1</text>
	</g>
	<g>
	  <circle id="P2" cx="160" cy="40" r="20" stroke="black" stroke-width="2" fill="white"></circle>
	  <text x="153" y="45" font-family="Arial" font-size="12" fill="black" style="white-space: pre; font-size: 12px;">P2</text>
	</g>
	<g>
	  <circle id="P3" cx="280" cy="40" r="20" stroke="black" stroke-width="2" fill="white"></circle>
	  <text x="273" y="45" font-family="Arial" font-size="12" fill="black" style="white-space: pre; font-size: 12px;">P3</text>
	</g>
	<g transform="matrix(1, 0, 0, 1, -7.518997, -11.555)" style="transform-origin: 7.519px 11.555px;">
	<a href="#T1" aria-label="T1" on:click={() => fire('T1')}>
		<rect x="97.519" y="31.555" width="20" height="40" stroke="black" stroke-width="2" fill="gray" class={net.canFire('T1') ? 'highlight' : ''}></rect>
		<text x="100.519" y="56.555" font-family="Arial" font-size="12" fill="white" style="white-space: pre; font-size: 12px;">T1</text>
	</a>
	</g>
	<g transform="matrix(1, 0, 0, 1, 12.481003, -11.555)">
		<a href="#T2" aria-label="T2" on:click={() => fire('T2')}>
			<rect x="197.519" y="31.555" width="20" height="40" stroke="black" stroke-width="2" fill="gray" class={net.canFire('T2') ? 'highlight' : ''}></rect>
			<text x="200.519" y="56.555" font-family="Arial" font-size="12" fill="white" style="white-space: pre; font-size: 12px;">T2</text>
		</a>
	</g>
	<line x1="60" y1="40" x2="90" y2="40" stroke="black" stroke-width="2" marker-end="url(#arrow)" style=""></line>
	<line x1="110" y1="40" x2="140" y2="40" stroke="black" stroke-width="2" marker-end="url(#arrow)" style=""></line>
	<line x1="180" y1="40" x2="210" y2="40" stroke="black" stroke-width="2" marker-end="url(#arrow)" style=""></line>
	<line x1="230" y1="40" x2="260" y2="40" stroke="black" stroke-width="2" marker-end="url(#arrow)" style=""></line>
	<g>
	  <circle id="P4" cx="160" cy="140" r="20" stroke="black" stroke-width="2" fill="white"></circle>
	  <text x="153" y="144.5" font-family="Arial" font-size="12" fill="black" style="white-space: pre; font-size: 12px;">P4</text>
	</g>
	<g transform="matrix(1, 0, 0, 1, 12.481003, 88.445)">
		<a href="#T3" aria-label="T3" on:click={() => fire('T3')}>
			<rect x="197.519" y="31.555" width="20" height="40" stroke="black" stroke-width="2" fill="gray" class={net.canFire('T3') ? 'highlight' : ''}></rect>
			<text x="200.519" y="56.555" font-family="Arial" font-size="12" fill="white" style="white-space: pre; font-size: 12px;">T3</text>
		</a>
	</g>
	<line x1="210" y1="139.481" x2="180" y2="139.481" stroke="black" stroke-width="2" marker-end="url(#arrow)" style=""></line>
	<g transform="matrix(1, 0, 0, 1, -7.518998, 88.445)" style="">
		<a href="#T5" aria-label="T5" on:click={() => fire('T5')}>
			<rect x="97.519" y="31.555" width="20" height="40" stroke="black" stroke-width="2" fill="gray" class={net.canFire('T5') ? 'highlight' : ''}></rect>
			<text x="100.519" y="56.555" font-family="Arial" font-size="12" fill="white" style="white-space: pre; font-size: 12px;">T5</text>
		</a>
	</g>
	<line x1="140" y1="139.481" x2="110" y2="139.481" stroke="black" stroke-width="2" marker-end="url(#arrow)" style=""></line>
	<path style="fill: transparent; stroke: rgb(0, 0, 0); stroke-width: 2px; paint-order: fill;" d="M 279.985 60 C 280.997 130.605 230 140 230 140" marker-end="url(#arrow)"></path>
	<g transform="matrix(1, 0, 0, 1, 0, 10)">
		<a href="#T4" aria-label="T4" on:click={() => fire('T4')}>
			<rect x="140" y="70" width="40" height="20" stroke="black" stroke-width="2" fill="gray" class={net.canFire('T4') ? 'highlight' : ''}></rect>
			<text x="153.589" y="85.353" font-family="Arial" font-size="12" fill="white" style="white-space: pre; font-size: 12px;" transform="matrix(1, 0, 0, 0.966284, -0.591008, 1.545152)">T4</text>
		</a>
	</g>
	<line x1="160" y1="120" x2="160" y2="100" stroke="black" stroke-width="2" marker-end="url(#arrow)" style="transform-origin: 160.93px 110px;"></line>
	<line x1="160" y1="80" x2="160" y2="60" stroke="black" stroke-width="2" marker-end="url(#arrow)" style="transform-origin: 160.93px 74.832px;"></line>
	<path style="fill: transparent; stroke: rgb(0, 0, 0); stroke-width: 2px; paint-order: fill; transform-box: fill-box; transform-origin: 50% 50%;" d="M 104.976 75 C 106.596 119.128 25 125 25 125" marker-end="url(#arrow)" transform="matrix(0, 1, -1, 0, -0.000007, -0.000007)"></path>

	<!-- Tokens -->
	<circle class="token" cx={tokenX} cy={tokenY} r="8" stroke="black" stroke-width="1" fill="blue" opacity="0.5" />
</svg>

<div
	class="bg-black text-green-400 p-4 mt-4 rounded-lg overflow-y-auto h-40 w-80 overflow-x-hidden whitespace-pre-wrap text-xs"
	bind:this={scrollContainer}
>
{net.logs.join('\n')}
</div>
</div>

<style>
	.token {
		transition: cx 0.5s ease, cy 0.5s ease;
	}
	@keyframes blink {
		0% { fill: gray; }
		50% { fill: lightgrey; }
		100% { fill: gray; }
	}
	.highlight {
		animation: blink 1s infinite;
	}
</style>
