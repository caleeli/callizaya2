<script>
import BlockA from './BlockA.svelte';
import Bpmn from './Bpmn.svelte';
import BpmnRequest from './BpmnRequest.svelte';

let state = '';

function updateState(event) {
    state = event.detail.state;
}

</script>

<BlockA className="col-span-8 md:col-span-5 row-span-1">
    <Bpmn state={state} />
</BlockA>
<BlockA className="col-span-8 md:col-span-3 row-span-2 p-4">
    <BpmnRequest on:state={updateState} />
</BlockA>