<script context="module" lang="ts">
    import Layout from "../components/Layout.svelte"

    export const layout = Layout
</script>

<script lang="ts">
    export let foo: string;
</script>

<Layout title="About">
    Hello {foo}
</Layout>
