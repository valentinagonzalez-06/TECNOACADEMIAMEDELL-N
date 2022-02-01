<div class="card-header text-center">
    DATOS PERSONALES
</div>
<br>
<div class="container">
    <form action="EnvioDatos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipodoc">{{'Tipo de Documento:'}}</label>
                    <select class="form-control {{$errors->has('tipo de documento')?'is-invalid':''}}" id="tipodoc"
                        name="tipodoc" value="{{isset($aprendizregistro->tipodoc)?$aprendizregistro->tipodoc:''}}">
                        <option>Tarjeta de Identidad</option>
                        <option>Cédula de Ciudadania</option>
                        <option>Cédula de Extranjeria</option>
                        <option>PEP</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="numiden">{{'Numero de Identificación:'}}</label>
                    <input type="text"
                        class="form-control {{$errors->has('numero de identificacion')?'is-invalid':''}} " id="numiden"
                        name="numiden" value="{{isset($aprendizregistro->numiden)?$aprendizregistro->numiden:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="depaexp">{{'Departamento de Expedición:'}}</label>
                    <select class="form-control {{$errors->has('departamento de expedicion')?'is-invalid':''}}"
                        id="depaexp" name="depaexp"
                        value="{{isset($aprendizregistro->depaexp)?$aprendizregistro->depaexp:''}}">
                        <option>Seleccione ..</option>
                        <option>Antioquia</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="munexp">{{'Municipio de Expedición:'}}</label>
                    <select class="form-control {{$errors->has('municipio de expedicion')?'is-invalid':''}}" id="munexp"
                        name="munexp" value="{{isset($aprendizregistro->munexp)?$aprendizregistro->munexp:''}}">
                        <option>Seleccione Municipio...</option>
                        <option>Medellín</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fechaexp">{{'Fecha de Expedición:'}}</label>
                    <input type="date" class="form-control {{$errors->has('fecha de expedicion')?'is-invalid':''}}"
                        id="fechaexp" name="fechaexp"
                        value="{{isset($aprendizregistro->fechaexp)?$aprendizregistro->fechaexp:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fechaven">{{'Fecha de Vencimiento:'}}</label>
                    <input type="date" class="form-control {{$errors->has('fecha de vencimiento')?'is-invalid':''}}"
                        id="fechaven" name="fechaven"
                        value="{{isset($aprendizregistro->fechaven)?$aprendizregistro->fechaven:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">{{'foto Documento'}}</label>
                    <input type="file" class="form-control {{$errors->has('foto')?'is-invalid':''}}" name="foto"
                        id="foto" value="{{isset($aprendizregistro->foto)?$aprendizregistro->foto:''}}">
                </div>
            </div>
        </div>
        <div class="card-header text-center">
            DATOS DEL APRENDIZ
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">{{'Nombre'}}</label>
                    <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}} " id="nombre"
                        name="nombre" value="{{isset($aprendizregistro->nombre)?$aprendizregistro->nombre:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="apellidos">{{'Apellidos'}}</label>
                    <input type="text" class="form-control {{$errors->has('apellidos')?'is-invalid':''}}" id="apellidos"
                        name="apellidos"
                        value="{{isset($aprendizregistro->apellidos)?$aprendizregistro->apellidos:''}}">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="depanacim">{{'Departamento de Nacimiento:'}}</label>
                    <select class="form-control {{$errors->has('departamento de nacimiento')?'is-invalid':''}}"
                        id="depanacim" name="depanacim"
                        value="{{isset($aprendizregistro->depanacim)?$aprendizregistro->depanacim:''}}">
                        <option>Seleccione ...</option>
                        <option>Boyaca</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="municipionac">{{'Municipio de Nacimiento:'}}</label>
                    <select class="form-control {{$errors->has('municipio de nacimiento')?'is-invalid':''}}"
                        id="municipionac" name="municipionac"
                        value="{{isset($aprendizregistro->municipionac)?$aprendizregistro->municipionac:''}}">
                        <option>Seleccione ...</option>
                        <option>Tunja</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nacimiento">{{'Fecha de Nacimiento:'}}</label>
                    <input type="date" class="form-control {{$errors->has('fecha de nacimiento')?'is-invalid':''}}"
                        id="nacimiento" name="nacimiento"
                        value="{{isset($aprendizregistro->nacimiento)?$aprendizregistro->nacimiento:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">{{'Genero:'}}</label>
                    <select class="form-control {{$errors->has('tipo de genero')?'is-invalid':''}}" id="genero"
                        name="genero" value="{{isset($aprendizregistro->genero)?$aprendizregistro->genero:''}}">
                        <option>Seleccione..</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estrato">{{'Estratos Socioeconomico:'}}</label>
                    <select class="form-control {{$errors->has('estrato socioeconomico')?'is-invalid':''}}" id="estrato"
                        name="estrato" value="{{isset($aprendizregistro->estrato)?$aprendizregistro->estrato:''}}">
                        <option>Seleccione..</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Grupoetnico">{{'Grupos Etnicos:'}}</label>
                    <select class="form-control {{$errors->has('grupoetnico')?'is-invalid':''}}" id="Grupoetnico"
                        name="Grupoetnico"
                        value="{{isset($aprendizregistro->Grupoetnico)?$aprendizregistro->Grupoetnico:''}}">
                        <option>Seleccione..</option>
                        <option>Ninguna</option>
                        <option>Afrocolombiano</option>
                        <option>Indigenas</option>
                        <option>Negritudes</option>
                        <option>Palenqueros</option>
                        <option>Razial</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="discapacidad">{{'Discapacidad:'}}</label>
                    <select class="form-control {{$errors->has('discapacidad')?'is-invalid':''}}" id="discapacidad"
                        name="discapacidad"
                        value="{{isset($aprendizregistro->discapacidad)?$aprendizregistro->discapacidad:''}}">
                        <option>Seleccione..</option>
                        <option>Ninguna</option>
                        <option>Discapacitado Cognitivo</option>
                        <option>Discapacitado Cognitivo o Mental</option>
                        <option>Discapacitado Limitacion Auditiva o Sorda</option>
                        <option>Discapacitado Limitacion Fisica o Motora</option>
                        <option>Discapacitado Limitacion Visual o Ciega</option>
                        <option>Discapacitado Mental</option>
                        <option>Discapacitados</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pbvulnerable">{{'Población Vulnerable:'}}</label>
                    <select class="form-control {{$errors->has('poblacion vulnerable')?'is-invalid':''}}"
                        id="pbvulnerable" name="pbvulnerable"
                        value="{{isset($aprendizregistro->pbvulnerable)?$aprendizregistro->pbvulnerable:''}}">
                        <option>Seleccione..</option>
                        <option>Ninguna</option>
                        <option>Desplazados por la Violencia</option>
                        <option>Desplazados por Fenomenos Naturales</option>
                        <option>Poblacion con Discapacidad</option>
                        <option>Adolescente Desvinculado de Grupos Armados</option>
                        <option>Adolescente en conflicto con la Ley Penal</option>
                        <option>Adolescente Trabajador</option>
                        <option>Grupos Etnicos</option>
                        <option>INPEC</option>
                        <option>Adolescentes y Jovenes Vulnerables</option>
                        <option>Mujer Cabeza de Hogar</option>
                        <option>Participantes del Programa de Reintegracion - Reintegrados</option>
                        <option>Poblacion Victima de Minas Antipersonal</option>
                        <option>Persona Mayor</option>
                        <option>Comunidad LGBTI</option>
                        <option>Comunidad ROOM</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="eps">{{'Eps de Atención:'}}</label>
                    <select class="form-control {{$errors->has('Eps')?'is-invalid':''}}" id="eps" name="eps"
                        value="{{isset($aprendizregistro->eps)?$aprendizregistro->eps:''}}">
                        <option>Seleccione ..</option>
                        <option>Nueva Eps</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tiposanguineo">{{'R.H y G.S:'}}</label>
                    <select class="form-control {{$errors->has('tipo sanguineo')?'is-invalid':''}}" id="tiposanguineo"
                        name="tiposanguineo"
                        value="{{isset($aprendizregistro->tiposanguineo)?$aprendizregistro->tiposanguineo:''}}">
                        <option>Seleccione..</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-header text-center">
            DATOS DE CONTACTO
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">{{'Correo Electronico:'}}</label>
                    <input type="text" class="form-control {{$errors->has('correo electronico')?'is-invalid':''}}"
                        id="email" name="email" value="{{isset($aprendizregistro->email)?$aprendizregistro->email:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cel">{{'Telefono Celular:'}}</label>
                    <input type="text" class="form-control {{$errors->has('celular')?'is-invalid':''}}" id="cel"
                        name="cel" value="{{isset($aprendizregistro->cel)?$aprendizregistro->cel:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dirección">{{'Dirección:'}}</label>
                    <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':''}}" id="direccion"
                        name="direccion"
                        value="{{isset($aprendizregistro->direccion)?$aprendizregistro->direccion:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telfijo">{{'Telefono Fijo:'}}</label>
                    <input type="text" class="form-control {{$errors->has('telefono fijo')?'is-invalid':''}}"
                        id="telfijo" name="telfijo"
                        value="{{isset($aprendizregistro->telfijo)?$aprendizregistro->telfijo:''}}">
                </div>
            </div>
        </div>
        <div class="card-header text-center">
            DATOS DEL ACUDIENTE
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombreapell">{{'Nombre y Apellidos:'}}</label>
                    <input type="text" class="form-control {{$errors->has('nombre y apellido')?'is-invalid':''}}"
                        id="nombreapell" name="nombreapell"
                        value="{{isset($aprendizregistro->nombreapell)?$aprendizregistro->nombreapell:''}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="numeroCedula">{{'Numero de Cedula:'}}</label>
                    <input type="text" class="form-control {{$errors->has('numero de cedula')?'is-invalid':''}} "
                        id="numeroCedula" name="numeroCedula"
                        value="{{isset($aprendizregistro->numeroCedula)?$aprendizregistro->numeroCedula:''}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="correo">{{'Correo Electronico:'}}</label>
                    <input type="text" class="form-control {{$errors->has('correo electronico')?'is-invalid':''}}"
                        id="correo" name="correo"
                        value="{{isset($aprendizregistro->correo)?$aprendizregistro->correo:''}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="celularacud">{{'Telefono Celular:'}}</label>
                    <input type="text" class="form-control {{$errors->has('celular acudiente')?'is-invalid':''}}"
                        id="celularacud" name="celularacud"
                        value="{{isset($aprendizregistro->celularacud)?$aprendizregistro->celularacud:''}}">

                </div>
            </div>
        </div>
        <div class="card-header text-center">
            DATOS DE LA INSTITUCIÓN
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="institucionedu">{{'Institución Educativa:'}}</label>
                    <select class="form-control {{$errors->has('instituciones educativas')?'is-invalid':''}}"
                        id="institucionedu" name="institucionedu"
                        value="{{isset($aprendizregistro->institucionedu)?$aprendizregistro->institucionedu:''}}">
                        <option>Seleccione</option>
                        <option>concejo de bello</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="grado">{{'Grado:'}}</label>
                    <select class="form-control {{$errors->has('grado')?'is-invalid':''}}" id="grado" name="grado"
                        value="{{isset($aprendizregistro->grado)?$aprendizregistro->grado:''}}">
                        <option>Seleccione ..</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>No aplica</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-header text-center">
            DATOS DE TECNOACADEMIA
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="facilitador">{{'Facilitador:'}}</label>
                    <select class="form-control {{$errors->has('tipo de facilitador')?'is-invalid':''}}"
                        id="facilitador" name="facilitador"
                        value="{{isset($aprendizregistro->facilitador)?$aprendizregistro->facilitador:''}}">
                        <option>Seleccione</option>
                        <option>Kelly Jhoana Sanchez Acosta</option>
                        <option>Orlando de Jesus Escorcia Nieto</option>
                        <option>Franz Sebastian Bedoya LLano</option>
                        <option>Jose Carmelo Alzate Arbelaez</option>
                        <option>Piedad Lucia Vieco</option>
                        <option>Jorge Armando Castro Escudero</option>
                        <option>Victor Manuel Gomez Ramirez</option>
                        <option>Elizabeth Alvarez Arango</option>
                        <option>Dallany Milena Urrego Garcia</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subarea">{{'Sub Area-Linea:'}}</label>
                    <select class="form-control {{$errors->has('sub area')?'is-invalid':''}} " id="subarea"
                        name="subarea" value="{{isset($aprendizregistro->subarea)?$aprendizregistro->subarea:''}}">
                        <option>Seleccione ..</option>
                        <option>Desarrollo de Software</option>
                        <option>Tecnologia Virtuales</option>
                        <option>Diseño Y Prototipado</option>
                        <option>Electronica Y Robotica</option>
                        <option>Biotecnologia</option>
                        <option>Nanoctenologia</option>
                        <option>Ciencias Basicas Con Enfasis En Quimica</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="periodicidad">{{'Periodicidad:'}}</label>
                    <select class="form-control {{$errors->has('tipo de periodicidad')?'is-invalid':''}}"
                        id="periodiocidad" name="periodicidad"
                        value="{{isset($aprendizregistro->periodicidad)?$aprendizregistro->periodicidad:''}}">
                        <option>Seleccione..</option>
                        <option>Anual</option>
                        <option>Semestral</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipoinfo">{{'Tipo de Formación:'}}</label>
                    <select class="form-control {{$errors->has('tipo de formacion')?'is-invalid':''}} " id="tipoinfo"
                        name="tipoinfo" value="{{isset($aprendizregistro->tipoinfo)?$aprendizregistro->tipoinfo:''}}">
                        <option>Seleccione..</option>
                        <option>Formacion</option>
                        <option>Proyecto Investigacion</option>
                        <option>Semillero</option>
                    </select>
                </div>
            </div>
        </div>
        <br><br>
        <div class="checkbox m-t-24">
            <label>
                <input class="icheck-control accepttos" type="checkbox" name="accepttos">
                <span>He leído y estoy de acuerdo con los <a
                        href="{{url('terminosCondiciones')}}" target="_blank">Términos y Condiciones</a></span>
            </label>
        </div>

        <div class="col-md-6">
            <div class="form-group text-align:center">
                <input class="btn btn-success" type="submit" value="REGISTRAR">
            </div>
        </div>
    </form>
</div>