import { App } from "@inertiajs/inertia-svelte"

import Homepage from "./Pages/Homepage.svelte"
import About from "./Pages/About.svelte"

const target = document.getElementById("app")

const pages = {
	"Homepage": Homepage,
	"About": About,
}

new App({
	target,
	props: {
		initialPage: JSON.parse(target.dataset.page),
		resolveComponent: name => ({ default: pages[name] }),
	},
})