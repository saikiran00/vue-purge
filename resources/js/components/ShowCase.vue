<template>
	<div class="mx-48">
		<span class="inline-flex rounded-md shadow-sm">
			<button
				@click="show = true"
				type="button"
				class="inline-flex items-center px-3 py-2 border border-transparent text-xs leading-4 font-medium rounded text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"
			>
				Open
			</button>
			<div v-if="show">
				<Modal @closeModal="show = false" />
			</div>
		</span>
	</div>
</template>
<script type="text/javascript">
import Modal from "./Modal.vue";
export default {
	components: {
		Modal,
	},

	data() {
		return {
			show: false,
		};
	},
};
</script>
