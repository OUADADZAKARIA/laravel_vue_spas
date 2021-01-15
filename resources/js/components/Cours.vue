<template>
    <div class="container">
        <h2>Cours</h2>
        <ul>
            <li><strong>HTML5</strong> : videos ({{ html_cours }})</li>
            <li><strong>CSS3</strong> : videos ({{ css3_cours }})</li>
            <li>
                <strong>JavaScript</strong> : videos ({{ javascript_cours }})
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            html_cours: "",
            css3_cours: "",
            javascript_cours: 102
        };
    },

    created() {
        axios.get("http://127.0.0.1:8000/api/cours")
        .then(response => response.data)
        .then(data => {
            this.html_cours = data.hamada;
            this.css3_cours = data.khalid;
        });
    }
};
</script>
