<script>
	import BPMNEngine from "../lib/BPMNEngine";
	import { createEventDispatcher } from 'svelte';

	const dispatch = createEventDispatcher();

	let engine = null;

	engine = new BPMNEngine();
	dispatch('state', { state: engine.state });

	function iniciarSolicitud(event) {
		const formData = new FormData(event.target);
		const data = Object.fromEntries(formData.entries());

		engine.next(data);
		engine = engine;
		dispatch('state', { state: engine.state });
	}
	function completarRevision(event) {
		const formData = new FormData(event.target);
		const data = Object.fromEntries(formData.entries());

		engine.next(data);
		engine = engine;
		dispatch('state', { state: engine.state });
	}
	function continuar() {
		engine.next({});
		engine = engine;
		dispatch('state', { state: engine.state });
	}
	function reiniciar() {
		engine = new BPMNEngine();
		dispatch('state', { state: engine.state });
	}
</script>

{#if !engine}
...
{:else if engine.state === "inicio"}
	<form class="text-sm" on:submit|preventDefault={iniciarSolicitud}>
		<h3>Prueba el proceso BPMN</h3>
		<div class="mb-4">
			<label for="nombre" class="block text-gray-700">Nombre:</label>
			<input
				type="text"
				id="nombre"
				name="nombre"
				class="mt-1 p-2 w-full border rounded-md"
				required
			/>
		</div>
		<div class="mb-4">
			<label for="email" class="block text-gray-700">
				Correo Electrónico:
			</label>
			<input
				type="email"
				id="email"
				name="email"
				class="mt-1 p-2 w-full border rounded-md"
				required
			/>
		</div>
		<div class="mb-4">
			<label for="solicitud" class="block text-gray-700">
				Solicitud:
			</label>
			<textarea
				id="solicitud"
				name="solicitud"
				rows="4"
				class="mt-1 p-2 w-full border rounded-md"
				required
			></textarea>
		</div>
		<button
			type="submit"
			class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600"
		>
			Enviar Solicitud
		</button>
	</form>
{:else if engine.state === "revisar-solicitud"}
	<form class="text-sm" on:submit|preventDefault={completarRevision}>
		<h3>Revisar Solicitud</h3>
		<p>La siguiente solicitud ha sido recibida:</p>
		<div class="mb-4">
			<label for="revisionNombre" class="block text-gray-700">
				Nombre:
			</label>
			<input
				type="text"
				id="revisionNombre"
				value={engine.data.nombre}
				name="nombre"
				class="mt-1 p-2 w-full border rounded-md"
				readonly
				disabled
			/>
		</div>
		<div class="mb-4">
			<label for="revisionEmail" class="block text-gray-700">
				Correo Electrónico:</label
			>
			<input
				type="email"
				id="revisionEmail"
				value={engine.data.email}
				name="email"
				class="mt-1 p-2 w-full border rounded-md"
				readonly
				disabled
			/>
		</div>
		<div class="mb-4">
			<label for="revisionSolicitud" class="block text-gray-700">
				Solicitud:
			</label>
			<textarea
				id="revisionSolicitud"
				name="solicitud"
				value={engine.data.solicitud}
				rows="4"
				class="mt-1 p-2 w-full border rounded-md"
				readonly
				disabled
			></textarea>
		</div>
		<div class="mb-4">
			<label for="options" class="block text-gray-700">Decisión:</label>
			<div class="mt-2">
				<label class="inline-flex items-center">
					<input
						id="options"
						type="radio"
						class="form-radio"
						name="decision"
						value="aprobar"
						required
					/>
					<span class="ml-2">Aprobar</span>
				</label>
				<label class="inline-flex items-center ml-6">
					<input
						type="radio"
						class="form-radio"
						name="decision"
						value="rechazar"
						required
					/>
					<span class="ml-2">Rechazar</span>
				</label>
			</div>
		</div>
		<button
			type="submit"
			class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600"
		>
			Enviar Revisión
		</button>
	</form>
{:else if engine.state === "notificar-al-solicitante"}
	<div class="p-8 rounded-lg shadow-md w-full mb-4 bg-white">
		<h2 class="text-2xl font-bold mb-6 text-center">Proceso Completado</h2>
		<p class="text-center text-gray-700">
			El solicitante ha sido notificado exitosamente.
		</p>
	</div>
	<button
		class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600"
		on:click={continuar}
	>
		Continuar
	</button>
{:else if engine.state === "rechazar-solicitud"}
	<div class="bg-white p-8 rounded-lg shadow-md w-full mb-4">
		<h2 class="text-2xl font-bold mb-6 text-center">Solicitud Rechazada</h2>
		<p class="text-center text-gray-700">
			El solicitante ha sido notificado del rechazo de su solicitud.
		</p>
	</div>
	<button
		class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600"
		on:click={continuar}
	>
		Continuar
	</button>
{:else}
	<div class="bg-white p-8 rounded-lg shadow-md w-full">
		<h2 class="text-2xl font-bold mb-6 text-center">Proceso Completado</h2>
	</div>
	<button
		class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600"
		on:click={reiniciar}
	>
		Reiniciar
	</button>
{/if}
