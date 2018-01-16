<template>
    <section class="pull-right">
        <a href="javascript:;" @click="open=true"><i class="glyphicon glyphicon-pencil"></i>Add Comment</a>
        <modal v-model="open" title="Create Comment" ref="modal" id="modal-demo">
            <textarea name="body" 
                id="body" 
                cols="30" 
                rows="3" 
                v-model="body"
                class="form-control"></textarea>
                <div slot="footer">
                    <btn type="default" @click="open=false">Close</btn>
                    <btn type="success" @click="saveComment">Save</btn>
                </div>
        </modal>
    </section>
</template>

<script>
    import { Modal,Btn } from 'uiv'
    export default {
        props: {
            article_id: {
                required: true,
            }
        },
        data() {
            return {
                open: false,
                body: '',
            }
        },
        methods:{
            saveComment (msg) {
                axios.post('articles/' + this.article_id + '/comments',{
                    body: this.body,
                }).then(({data})=>{
                    this.open = false;
                });
            }
        },
        components:{
            Modal, Btn
        }
    }
</script>
