<template>
  <div>Index</div>
  <Link href="/hello">
    Show Page
  </Link>
  <div>
    The message is: {{ message }} <br>
    From {{ myName }}
  </div>
  <div>
    <button @click="reset">
      Click me to reset the counter
    </button>
    <p>
      Count is: {{ count }}
    </p>
  </div>


  
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
defineProps({ message: String, myName: String })

const count = ref(0)

const reset = () => {
  count.value = 0
}

setInterval(() => {
  count.value++
}, 1000)

</script>

<style scoped>
button {
  background-color: #42b983;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
}
</style>