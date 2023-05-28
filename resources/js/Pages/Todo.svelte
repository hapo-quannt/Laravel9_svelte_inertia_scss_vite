<script>
    import InputError from '@/Components/InputError.svelte';
     import {useForm } from '@inertiajs/svelte'
    export let data;

  const form = useForm({
        job: "",
        deadline: "",
    });

    const submit = () => {
        $form.post(route("create-todo"));
    };
</script>

<div id="todoApp">
    <div class="header-title">{data.author}</div>
    <form on:submit|preventDefault={submit} action="#"
    method="POST">
        <div class="input-group">
            <label for="job-input">Job</label>
            <input type="text" id="job-input" name="job" placeholder="input job here" />
            <InputError message={$form.errors.job} />
        </div>
        <div class="input-group">
            <label class="form-label" for="deadline-input">Deadline</label>
            <input type="datetime-local" id="deadline-input" name="deadline" placeholder="input deadline here" />
        </div>
        <button type="submit" class="add-button">Add Job</button>
    </form>
</div>