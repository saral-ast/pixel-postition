<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form action='/jobs' method='POST'>
        <x-forms.input name="title" label="Title" placeholder="CEO"/>
        <x-forms.input name="salary" label="Salary" placeholder="$50,000 USD"/>
        <x-forms.input name="location" label="Location" placeholder="Winter Park Florida"/>

        <x-forms.select label='Schedule' name='schedule'>
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://www.google.com"/>

        <x-forms.checkbox label="Features(Cost Extra)" name="featured"/>


        <x-forms.divider/>

        <x-forms.input label="Tags(coma seperated)" name='tags' placeholder='Web Developer, PHP, Laravel' />

        <x-forms.button>Publis Job</x-forms.button>
    </x-forms.form>
</x-layout>