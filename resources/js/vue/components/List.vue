<template>
  <div>
    <h1>Listado de Notes -- {{ totalRows }} --</h1>
  </div>

  <o-table
    :loading="loading"
    :data="notes.current_page && notes.data.length == 0 ? [] : notes.data"
  >
    <o-table-column field="id" label="ID" width="5" numeric v-slot="props">
      {{ props.row.id }}
    </o-table-column>
    <o-table-column
      field="name"
      label="Izena"
      width="60"
      numeric
      v-slot="props"
    >
      {{ props.row.name }}
    </o-table-column>
    <o-table-column
      field="tags"
      label="Etiketak"
      width="20"
      numeric
      v-slot="props"
    >
      {{ props.row.tags }}
    </o-table-column>

    <o-table-column
      field="user"
      label="Nork Sortua"
      width="10"
      numeric
      v-slot="props"
    >
      {{ props.row.user.name }}
    </o-table-column>

    <o-table-column
      field="creatd_at"
      label="Noiz Sortua"
      width="5"
      numeric
      v-slot="props"
    >
      {{ props.row.created_at }}
    </o-table-column>
  </o-table>

  <hr />
  <o-pagination
    v-if="notes.current_page && notes.data.length > 0"
    @change="updatePage"
    v-model:current="currentPage"
    :total="notes.total"
    :range-before="2"
    :range-after="2"
    order="centered"
    size="small"
    :simple="false"
    :rounded="true"
    :per-page="notes.per_page"
    icon-prev="arrow-left"
    icon-next="arrow-right"
    aria-next-label="Next page"
    aria-previous-label="Previous page"
    aria-page-label="Page"
    aria-current-label="Current page"
  >
  </o-pagination>
</template>

<script>
export default {
  data() {
    return {
      notes: [],
      loading: true,
      currentPage: 1,
      totalRows: 0,
    };
  },

  methods: {
    updatePage() {
      setTimeout(this.listPage, 10);
    },

    listPage() {
      this.loading = true;
      this.$axios.get("/api/notes?page=" + this.currentPage).then((res) => {
        this.notes = res.data;
        this.totalRows = this.notes.total;
        this.loading = false;
      });
      this.loading = false;
    },
  },

  async mounted() {
    this.listPage();
  },
};
</script>