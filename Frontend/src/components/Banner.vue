<template>
    <div class="content-banner">
        <div class="banner" :style="{ backgroundImage: 'url(' + imageSrc + ')' }">
        </div>
        <div class="textimg-cont">
            <h1 class="textimg-title">{{ text }}</h1>
            <h3 class="textimg-subtitle">{{ subtitle }}</h3>
            <span class="arrow-banner"></span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Banner',
    props: {
        imageSrc: String,
        subtitle: String,
        text: String
    }
};
</script>

<style scoped>
.content-banner {
    display: flex;
    flex-direction: column;
    height: 80vh;
}

.banner {
    width: 100%;
    height: 100%;
    max-height: 80vh;
    position: absolute;
    background-size: cover;
    background-position: center;
    filter: brightness(50%);
}

.textimg-cont {
    position: relative;
    color: var(--color4);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 30px 30px;
}

.textimg-title {
    font-size: 35px;
    font-weight: 600;
}

.textimg-subtitle {
    font-weight: 400;
    margin: 0;
}

.arrow-banner {
    border-right: 3px solid var(--color4);
    border-bottom: 3px solid var(--color4);
    height: 30px;
    width: 30px;
    transform: rotate(45deg);
    position: absolute;
    bottom: 35px;
    left: 50%;
}
</style>
