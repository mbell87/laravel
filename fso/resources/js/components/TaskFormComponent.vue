<template>
                        <div class="form-group">
                            <label>Vrsta naloga: </label>
                            <select class="form-control selectable" name="type_id">
                                <option value="">Odaberite opciju</option>
                                @foreach($taskTypes as $item)
                                <option  {{ (old("type_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dodijeljeno: </label>
                            <select class="form-control selectable" name="user_id">
                                <option value="">Odaberite opciju</option>
                                @foreach($workers as $item)
                                <option {{ (old("user_id") == $item->id ? "selected":"") }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    <button type="submit" class="btn btn-primary"> ADD </button>


</template>
<script>
  export default {
    computed: {
      image() {
        return `/images/${this.color}.png`;
      }
    },
    methods: {
    },
    props: ['id', 'color', 'name'],
  }
</script>

