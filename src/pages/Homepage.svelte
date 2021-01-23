<script context="module" lang="ts">
    import Layout from "../components/Layout.svelte"

    export const layout = Layout
</script>

<script lang="ts">
    export let backendFramework: string;
    export let frontendFramework: string;
</script>

<Layout title="Homepage">
    <h2>What is the best backend framework?</h2>
    <p>{backendFramework}</p>

    <h2>What is the best frontend framework?</h2>
    <p>{frontendFramework}</p>
</Layout>
