<html>

<!-- calculadora Farol Octagono-->

<div class="cells p-3">
    <div class="titulo">
        Tamanho do Farol Octagono <img src="./images/altoenoctagono.png" class="icon">
    </div>
    <div class="entrada_normal">
        <select name="pais" id="pais5" value="PE" class="form-control">
            <option value="PE">Peru</option>
            <option value="CH">Chile</option>
            <option value="UY">Uruguay</option>
            <option value="MX">México</option>
        </select>
    </div>
    <div class="entrada_normal">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Altura FOP (mm):
            </span>
        </div>
        <input type="text" class="form-control" id="altFOP5" value="">
    </div>

    <div class="entrada_normal">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Largura FOP (mm):
            </span>
        </div>
        <input type="text" class="form-control" id="largFOP5" value="">
    </div>

    <div class="linha_resposta">
        <div class="col-7 align-self-center">
            A largura do Farol <br> deve ser de:
        </div>
        <div class="col-3 align-self-center">
            <input type="text" class="form-control" id="largF5" value="0" style="height:66px; margin:auto">
        </div>

        <div class="col-2 align-self-center pl-5">
            <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-clipboard-512.png" alt="" class="icon" onclick="copyToClipboard(document.getElementById('largF5').value+' mm')">
        </div>
        <div class="col align-self-center">
            <p id="descricao_farol">
            </p>
        </div>
    </div>
    <script type="text/javascript" src="./partials/functions/faroloctagono.function.js"></script>
    <script>
        $(document).ready(() => {
            $('#pais5').change(() => largura_final());
            $('#altFOP5').change(() => largura_final())
            $('#largFOP5').change(() => largura_final())
            $('#areaFOP5').change(() => largura_final())
            $('#cilindroYes').change(() => largura_final())
            $('#cilindroNo').change(() => largura_final())
        });

        function largura_final() {
            $("#largF5").val(
                faroloctagono($("#altFOP5").val(),
                    $("#largFOP5").val(),
                    $("#areaFOP5").val(),
                    $("#pais5").val(),
                    "descricao_farol")
            );
        }
    </script>
</div>

</html>