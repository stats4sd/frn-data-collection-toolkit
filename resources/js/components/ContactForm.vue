<template>

    <form method="POST" @submit.prevent="submit" class="form">
        <input type="hidden" name="_token" :value="csrf">

        <div class="alert alert-success" v-if="success">
            Thanks for contacting us. Your message has been forwarded to the RMS team
        </div>



        <div class="form-group required" :class="{ 'has-error' : errors.name }">
            <label>Name:</label>
            <input
                class="form-control"
                placeholder="Enter Your Name"
                name="name"
                type="text"
                v-model="fields.name"
            >
            <span class="text-danger" v-if="errors.name">{{ errors.name }}</span>
        </div>

        <div class="form-group required" :class="{ 'has-error' : errors.email }">
            <label>Email:</label>
            <input
                class="form-control"
                placeholder="Enter Your Email"
                name="email"
                type="email"
                v-model="fields.email"
            >
            <span class="text-danger" v-if="errors.email">{{ errors.email }}</span>
        </div>

        <div class="form-group required" :class="{ 'has-error' : errors.purpose }">
            <label>What is the purpose of your message?</label>
            <select
                class="form-control"
                data-placeholder="Select Purpose"
                name="purpose"
                v-model="fields.purpose"
            >
                <option v-for="(value, name) in options" :value="name">{{ value }}</option>
            </select>
            <span class="text-danger" v-if="errors.purpose">{{ errors.purpose }}</span>
        </div>

        <div class="alert alert-info" v-if="fields.purpose === 'resource'">
            We’re keen to hear about what you have to share! In your message, please include as many as possible of the following details:
            <ul>
                <li>A summary description of the resource – what it is, what it’s about etc.</li>
                <li>Who do you think would use it?</li>
                <li>Who is the author/creator?</li>
                <li>Do we have permission to share and host it on this platform?</li>
                <li>Can it be included in the broader Stats4SD resources database?</li>
                <li>A link if it is already available online.</li>
            </ul>
           A reviewer will get back to you via email soon to confirm if it is deemed appropriate for the site, and possibly to get more information or work with you to prepare the resource for sharing.
       </div>
        <div class="alert alert-info" v-if="fields.purpose === 'reviewer'">
            In your message, let us know a bit about you and your area(s) of interest within CCRP. We’ll be in contact soon to discuss the details.
        </div>
        <div class="alert alert-info" v-if="fields.purpose === 'feedback'">
            We’re always looking for feedback. Please let us know what you think, and tell us about how you think we can make the platform better and ensure the content we share on our platform is of high quality and helpful for users.

            If your feedback concerns a specific item or group of resources, please specify the name and URL if possible.

            We might send you an email you to follow up on your feedback, ask questions or respond to comments.
        </div>
        <div class="form-group required" :class="{ 'has-error' : errors.message }">
            <label>Message:</label>
            <textarea
                class="form-control"
                style="height: 10rem;"
                placeholder="Enter Your Message"
                name="message"
                v-model="fields.message">
            </textarea>
            <span class="text-danger" v-if="errors.message">{{ errors.message }}</span>
        </div>

        <div class="form-group required" :class="{ 'has-error' : errors['g-recaptcha-response']}" v-if="siteKey">
            <div class="g-recaptcha"
                :data-sitekey="siteKey"
                :data-callback="updateRecaptcha"
            ></div>
            <span class="text-danger" v-if="errors['g-recaptcha-response']">{{ errors['g-recaptcha-response'] }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-primary site-btn mt-3" :disabled="!loaded">
                <span v-if="loaded">Contact Us</span>
                <span v-if="!loaded"><i class="fa fa-spinner fa-spin mr-2"></i> Submitting</span>
            </button>
        </div>
    </form>

</template>

<script>

    export default {

        props: {
            route: String,
        },

        data() {
            return {
                siteKey: process.env.MIX_RECAPTCHA_KEY,
                errors: {},
                fields: {},
                success: false,
                loaded: true,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                options: {
                    'resource': 'I have a resource I want to share on the platform',
                    'reviewer': 'I want to get involved in reviewing submissions and managing the collection',
                    'feedback': 'I have feedback, suggestions, requests or other input',
                    'other': 'Any other purpose'
                },
            }
        },

        methods: {

            updateRecaptcha(response) {
                this.fields['g-recaptcha-response'] = response;
            },

            submit() {

                this.loaded = false;
                this.success = false;
                this.errors = {};

                axios.post(this.route, this.fields).then(response => {

                    console.log("response", response);
                    this.fields = {};
                    this.loaded = true;
                    this.success = true;

                }).catch(error => {
                    this.loaded = true;
                    if(error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            },
        },
    }

</script>