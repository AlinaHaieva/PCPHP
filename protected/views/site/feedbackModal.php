<div class="modal fade studentFeedbackModal" id="studentFeedbackModal">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="container-fluid" id="modal">
                <?php
                $this->widget('CTabView', [
                    'tabs' => [
                        'tab1' => [
                            'title' => '<button type="button" class="feedback-tab"></button>',
                            'view' => 'criterias',
                        ],
                        'tab2' => [
                            'title' => '<button type="button" class="feedback-tab"></button>',
                            'view' => 'mentorsScore'
                        ],
                        'tab3' => [
                            'title' => '<button type="button" class="feedback-tab"></button>',
                            'view' => 'interviewScore'
                        ],
                    ],
                    'cssFile' => Yii::app()->request->baseUrl . "/css/feedbackModal.css",
                ]);
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('keydown', event => {
        if (event.keyCode === 70) {
            document.querySelector(".openFeedbackModal").click();
        }
    });
</script>