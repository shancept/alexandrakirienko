<template>
  <div id="app">
    <div class="block">
      <div class="row">
        <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi assumenda consequatur deleniti, dicta dolores eum id libero maxime nemo numquam officiis provident qui recusandae repellat sit temporibus voluptate.</div>
        <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aliquam, nisi officia quo veritatis. Cupiditate delectus dolore doloribus facilis fugit itaque, iure labore libero quia vel veritatis vitae, voluptate.</div>
        <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam culpa cupiditate delectus deserunt doloribus, error ex expedita fugiat iste laborum numquam omnis repellendus suscipit ut! Est natus omnis sunt?</div>
      </div>
    </div>
  </div>
</template>

<style lang="less">
  @import "./assets/fonts/font.css";
  @import "./assets/global/normalize.css";
  @import "./assets/global/variables.less";
  @import "./assets/global/mixins.less";
  @import "./assets/global/scaffolding.less";
  @import "./assets/global/smart-grid.less";

  body {
    font-size: 18px;
    color: #302d34;
    line-height: 1.55;
    font-weight: 300;
  }

  .block {
    .wrapper();
  }

  .row {
    .row-flex();
  }

  .col {
    .col();
    .size(4);
  }
</style>
