<script lang="ts">
    import Nav from "./Nav.svelte";

    export let title: string
</script>

<svelte:head>
    <title>{title}</title>
</svelte:head>

<main>
    <Nav/>

    <article>
        <h1>{title}</h1>
        <slot />
    </article>
</main>
