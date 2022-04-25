<template>
  <h1>Note:</h1>

  <form @submit.prevent="submit">
    <o-field
      label="Izena"
      :variant="errors.name ? 'danger' : 'primary'"
      :message="errors.name"
    >
      <o-input v-model="form.name" value=""></o-input>
    </o-field>

    <o-field label="Erabiltzailea">
      <o-select
        v-model="form.created_by"
        placeholder="--"
        :variant="errors.created_by ? 'danger' : 'primary'"
        :message="errors.created_by"
      >
        <option v-for="user in users" v-bind:key="user.id" :value="user.id">
          {{ user.name }}
        </option>
      </o-select>
    </o-field>

    <o-field label="Aktibo">
      <o-select
        v-model="form.active"
        placeholder="--"
        :variant="errors.active ? 'danger' : 'primary'"
        :message="errors.active"
      >
        <option value="1">Bai</option>
        <option value="0">Ez</option>
      </o-select>
    </o-field>

    <o-button varian="primary" native-type="submit"> Bidali </o-button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      users: [],
      form: {
        name: "",
        created_by: "",
        active: "",
      },
      errors: {
        name: "",
        created_by: "",
        active: "",
      },
    };
  },
  mounted() {
    this.getUsers();
  },
  methods: {
    cleanErrorsForm() {
      this.errors.name = "";
      this.errors.created_by = "";
      this.errors.active = "";
    },

    getUsers() {
      this.$axios.get("/api/users").then((res) => {
        this.users = res.data;
      });
    },

    submit() {
      this.$axios
        .post("/api/notes/store", this.form)
        .then((res) => {
          console.log(res);
        })
        .catch((error) => {
          console.log(error.response.data);
          
          this.cleanErrorsForm();
          if (error.response.data.name) {
            this.errors.name = error.response.data.name[0];
          }
          if (error.response.data.created_by) {
            this.errors.created_by = error.response.data.created_by[0];
          }
          if (error.response.data.active) {
            this.errors.active = error.response.data.active[0];
          }

        });
    },
  },
};
</script>
