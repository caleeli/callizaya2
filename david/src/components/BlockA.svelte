<script>
	export let className;
</script>

<div
	class={`card hover:shadow-lg hover:transform hover:-translate-y-1 duration-300 ease-in-out rounded-md border relative min-h-36 grid-flow-dense p-2 ${className}`}
>
	<slot />
</div>

<style>
	.card {
		background: rgba(255, 255, 255, 0.6);
		backdrop-filter: blur(10px);
	}
</style>
